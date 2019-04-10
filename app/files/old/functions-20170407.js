function menuClick(n) {
	if (n == 0) {
		hideAll();
		document.getElementById('menu0').style.display = 'block';
	} else if (n == 101) {
		hideAll();
		document.getElementById('menu1').style.display = 'block';
	} else if (n == 102) {
		hideAll();
		document.getElementById('menu2').style.display = 'block';
	} else if (n == 103) {
		hideAll();
		document.getElementById('menu3').style.display = 'block';
	} else if (n == 104) {
		hideAll();
		document.getElementById('menu4').style.display = 'block';
	} else {
		hideAll();
		document.getElementById('page' + n).style.display = 'block';
	}
}

function hideAll() {
	var pages = document.querySelectorAll(".pages");
	for (var i = 0; i < pages.length; i++) {
		pages[i].style.display = 'none';
	}
	document.getElementById('menu0').style.display = 'none';
	document.getElementById('menu1').style.display = 'none';
	document.getElementById('menu2').style.display = 'none';
	document.getElementById('menu3').style.display = 'none';
	document.getElementById('menu4').style.display = 'none';
}

function playAlbum(n, p) {
	stopAll();
	document.querySelector("#album" + p + "_" + n + " td:nth-child(2) img:nth-child(1)").style.display = 'none';
	document.querySelector("#album" + p + "_" + n + " td:nth-child(2) img:nth-child(2)").style.display = 'block';
	if (checkCookie("time" + p + "_" + n)) {document.querySelector("#album" + p + "_" + n + " audio").currentTime = getCookie("time" + p + "_" + n);}
	document.querySelector("#album" + p + "_" + n + " audio").play();
}
function pauseAlbum(n, p) {
	document.querySelector("#album" + p + "_" + n + " td:nth-child(2) img:nth-child(2)").style.display = 'none';
	document.querySelector("#album" + p + "_" + n + " td:nth-child(2) img:nth-child(1)").style.display = 'block';
	document.querySelector("#album" + p + "_" + n + " audio").pause();
	setCookie("time" + p + "_" + n, document.querySelector("#album" + p + "_" + n + " audio").currentTime);
}
function stopAlbum(n, p) {
	document.querySelector("#album" + p + "_" + n + " td:nth-child(2) img:nth-child(2)").style.display = 'none';
	document.querySelector("#album" + p + "_" + n + " td:nth-child(2) img:nth-child(1)").style.display = 'block';
	document.querySelector("#album" + p + "_" + n + " audio").pause();
	document.querySelector("#album" + p + "_" + n + " audio").currentTime = 0;
	deleteCookie("time" + p + "_" + n);
}
function playNextAlbum(n1, n2, p) {
	setTimeout(function(){
		stopAlbum(n1, p);
		playAlbum(n2, p);
	}, 3000);
}
function stopAll() {
	/* ii should be less than the number of albums plus one */
	var audios = document.querySelectorAll(".hr");
	for (var ii = 0; ii < audios.length; ii++) {
		var id = audios[ii].id.split("_");
		pauseAlbum(id[1], id[0].substr(5));
	}
}
function playRand() {
	var albums = [5, 9, 10, 12, 14, 15, 16, 17, 18, 19, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 39, 40, 42, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75];
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