if (checkCookie("p") && checkCookie("n")) {
	var p = getCookie("p");
	var n = getCookie("n");
	var aud = document.getElementById("player");
	var rec = document.getElementById("record");
	
	aud.preload = "auto";
	rec.src = "files/audio/album" + n + ".mp3";
	aud.load();
	if (checkCookie("t" + p + "_" + n)) { aud.currentTime = getCookie("t" + p + "_" + n); }
}

setInterval(function() {
	if (checkCookie("p") && checkCookie("n")) {
		var p = getCookie("p");
		var n = getCookie("n");
		var aud = document.getElementById("player");
		var bar = document.getElementById("timer");
		
		bar.style.width = ((aud.currentTime / aud.duration) * 100) + '%';
		bar.className = "b" + document.querySelector("#album" + p + "_" + n).className.substr(4);
		setCookie("t" + p + "_" + n, aud.currentTime);
		
		h = Math.floor(aud.currentTime/3600) >= 1 ? Math.floor(aud.currentTime/3600) : 0;
		m = Math.floor(aud.currentTime/60) - (h * 60) >= 1 ? Math.floor(aud.currentTime/60) - (h * 60) : 0;
		s = Math.round(aud.currentTime) - (m * 60) >= 1 ? Math.round(aud.currentTime) - (m * 60) : 0;
		document.getElementById("pos").innerHTML = ("00" + h).slice(-2) + ":" + ("00" + m).slice(-2) + ":" + ("00" + s).slice(-2);
		
		h = Math.floor(aud.duration/3600) >= 1 ? Math.floor(aud.duration/3600) : 0;
		m = Math.floor(aud.duration/60) - (h * 60) >= 1 ? Math.floor(aud.duration/60) - (h * 60) : 0;
		s = Math.round(aud.duration) - (m * 60) >= 1 ? Math.round(aud.duration) - (m * 60) : 0;
		document.getElementById("dur").innerHTML = ("00" + h).slice(-2) + ":" + ("00" + m).slice(-2) + ":" + ("00" + s).slice(-2);
	} else {
		document.getElementById("timer").style.width = '0px';
		document.getElementById("pos").innerHTML = "00:00:00";
		document.getElementById("dur").innerHTML = "00:00:00";
	}
}, 100);

var noSleep = new NoSleep();
var wakeLockEnabled = false;
var ts = document.querySelectorAll(".hr td a");
for (var i = 0; i < ts.length; i++) { ts[i].addEventListener('click', function() { noSleep.enable(); wakeLockEnabled = true; }, false); }
document.getElementById("playBtn").addEventListener('click', function() { noSleep.enable(); wakeLockEnabled = true; }, false);
document.getElementById("pausBtn").addEventListener('click', function() { noSleep.disable(); wakeLockEnabled = false; }, false);
document.getElementById("stopBtn").addEventListener('click', function() { noSleep.disable(); wakeLockEnabled = false; }, false);

var slider = document.getElementById("timer")
var sliding = false;
slider.addEventListener("mousedown", function(e) { if (checkCookie("p") && checkCookie("n")) { sliding = true; slide(e); } });
slider.addEventListener("mousemove", function(e) { slide(e); });
slider.addEventListener("click", function(e) { slide(e); });
slider.addEventListener("mouseup", function(e) { if (checkCookie("p") && checkCookie("n")) { slide(e); sliding = false; } });

function slide(e) {
	if (checkCookie("p") && checkCookie("n") && sliding) {
		var p = getCookie("p");
		var n = getCookie("n");
		var aud = document.getElementById("player");
		var w = slider.style.width;
		var x = e.screenX * (window.outerWidth / window.innerWidth);
		var s = window.outerWidth;
		aud.currentTime = (x / s) * aud.duration;
	}
}

function menuClick(n) {
	if (n > 99) {
		hideAll();
		document.getElementById('menu' + (n - 100)).style.display = 'block';
	} else {
		hideAll();
		document.getElementById('page' + n).style.display = 'block';
	}
	/*if (document.getElementById("player").paused) {
		var firsts = {1:"12, 1" , 2:"25, 2", 3:"64, 3", 4:"20, 4", 5:"32, 5", 6:"63, 6", 10:"76, 10", 11:"88, 11", 12:"103, 12", 13:"116, 13", 15:"36, 15", 16:"71, 16", 17:"73, 17", 19:"14, 19", 100:"0, 0", 101:"64, 3", 102:"12, 1", 103:"76, 10", 104:"36, 15"};
		document.getElementById("playBtn").href = 'javascript:playAlbum(' + firsts[n] + ')';
		document.getElementById("pausBtn").href = 'javascript:pauseAlbum(' + firsts[n] + ')';
		document.getElementById("stopBtn").href = 'javascript:stopAlbum(' + firsts[n] + ')';
	}*/
}
function hideAll() {
	var pages = document.querySelectorAll(".pages");
	for (var i = 0; i < pages.length; i++) {
		pages[i].style.display = 'none';
	}
	var menus = document.querySelectorAll(".menus");
	for (var i = 0; i < menus.length; i++) {
		menus[i].style.display = 'none';
	}
}

function playAlbum(n, p) {
	if (n == 0 && p == 0) {
		if (checkCookie("n") && checkCookie("p")) {
			playAlbum(getCookie("n"), getCookie("p"));
		}
	} else {
		if (checkCookie("n") && checkCookie("p")) {
			document.querySelector("#album" + getCookie("p") + "_" + getCookie("n")).className = document.querySelector("#album" + getCookie("p") + "_" + getCookie("n")).className.substr(0, 8);
		}
		document.getElementById("playBtn").style.display = 'none';
		document.getElementById("playBtn").href = 'javascript:playAlbum(' + n + ', ' + p + ')';
		document.getElementById("pausBtn").style.display = 'inline-block';
		document.getElementById("pausBtn").href = 'javascript:pauseAlbum(' + n + ', ' + p + ')';
		document.getElementById("stopBtn").href = 'javascript:stopAlbum(' + n + ', ' + p + ')';
		document.querySelector("#album" + p + "_" + n).className += " b" + document.querySelector("#album" + p + "_" + n).className.substr(4) + " playingAudio";
		
		var aud = document.getElementById("player");
		var rec = document.getElementById("record");
		
		aud.pause();
		rec.src = "files/audio/album" + n + ".mp3";
		aud.load();
		aud.currentTime = checkCookie("t" + p + "_" + n) ? getCookie("t" + p + "_" + n) : 0;
		aud.play();
		setCookie("p", p);
		setCookie("n", n);
		addStat(0, "album" + n);
		
		var curr = parseInt(rec.src.split("album")[1].split(".")[0]);
		var next = 0;
		var albs = document.querySelectorAll("#page" + p + " table");
		for (var i = 0; i < (albs.length - 1); i++) {
			if (albs[i].id.split("_")[1] == n) { next = albs[i + 1].id.split("_")[1]; break; }
		}
		aud.setAttribute("onended", "playNextAlbum(" + curr + ", " + next + ", " + p + ")");
	}
}
function pauseAlbum(n, p) {
	document.getElementById("playBtn").style.display = 'inline-block';
	document.getElementById("pausBtn").style.display = 'none';
	document.querySelector("#album" + p + "_" + n).className = document.querySelector("#album" + p + "_" + n).className.substr(0, 8);
	
	var aud = document.getElementById("player");
	aud.pause();
	setCookie("t" + p + "_" + n, aud.currentTime);
}
function stopAlbum(n, p) {
	document.getElementById("playBtn").style.display = 'inline-block';
	document.getElementById("playBtn").href = 'javascript:playAlbum(0, 0)';
	document.getElementById("pausBtn").style.display = 'none';
	document.getElementById("pausBtn").href = 'javascript:pauseAlbum(0, 0)';
	
	if (n != 0 && p != 0) {
		document.querySelector("#album" + p + "_" + n).className = document.querySelector("#album" + p + "_" + n).className.substr(0, 8);
	}
	
	var aud = document.getElementById("player");
	
	aud.pause();
	aud.currentTime = 0;
	deleteCookie("t" + p + "_" + n);
	deleteCookie("p");
	deleteCookie("n");
}
function playNextAlbum(n1, n2, p) {
	setTimeout(function(){
		stopAlbum(n1, p);
		if (n2 > 0) {
			stopAlbum(n2, p);
			playAlbum(n2, p);
		}
	}, 2000);
}
function playRand() {
	var albums = [5, 9, 10, 12, 14, 15, 16, 17, 18, 19, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 39, 40, 42, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 129, 130, 131, 132, 133, 134, 135, 136];
	playAlbum(albums[Math.floor(Math.random() * albums.length)], 1000);
}

function setCookie(cname, cvalue) {
	var d = new Date();
	d.setTime(d.getTime() + (7*24*60*60*1000));
	var expires = "expires="+d.toUTCString();
	document.cookie = cname + "=" + cvalue + "; " + expires;
}
function getCookie(cname) {
	var name = cname + "=";
	var ca = document.cookie.split(';');
	for(var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') {
			c = c.substring(1);
		}
		if (c.indexOf(name) == 0) {
			return c.substring(name.length, c.length);
		}
	}
	return "";
}
function checkCookie(cname) {
	var c = getCookie(cname);
	if (c != "") {
		return true;
	} else {
		return false;
	}
}
function deleteCookie(cname) {
	document.cookie = cname + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
}
window.addEventListener("keydown", function (e) {
	if (e.keyCode == 32) {
		e.preventDefault();
		if (checkCookie("p") && checkCookie("n")) {
			var aud = document.getElementById("player");
			var rec = document.getElementById("record");
			aud.paused ? aud.play() : aud.pause();
			document.getElementById("playBtn").style.display = aud.paused ? "inline-block" : "none";
			document.getElementById("pausBtn").style.display = aud.paused ? "none" : "inline-block";
			
			if (aud.getAttribute("onended") == null) {
				var curr = parseInt(rec.src.split("album")[1].split(".")[0]);
				var next = 0;
				var albs = document.querySelectorAll("#page" + p + " table");
				for (var i = 0; i < (albs.length - 1); i++) {
					if (albs[i].id.split("_")[1] == n) { next = albs[i + 1].id.split("_")[1]; break; }
				}
				aud.setAttribute("onended", "playNextAlbum(" + curr + ", " + next + ", " + p + ")");
			}
		} else {
			playAlbum(0, 0);
		}
	}
});