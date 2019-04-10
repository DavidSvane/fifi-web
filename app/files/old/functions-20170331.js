function menuClick(n) {
	if (n == 0) {
		hideAll();
		document.getElementById('menu').style.display = 'block';
	} else if (n == 100) {
		hideAll();
		document.getElementById('menu2').style.display = 'block';
	} else if (n == 101) {
		hideAll();
		document.getElementById('menu1').style.display = 'block';
	} else if (n == 102) {
		hideAll();
		document.getElementById('menu3').style.display = 'block';
	} else {
		hideAll();
		document.getElementById('page' + n).style.display = 'block';
	}
}

function hideAll() {
	var counter = 1;
	while (document.getElementById('page' + counter) != null) {
		document.getElementById('page' + counter).style.display = 'none';
		counter++;
	}
	document.getElementById('menu1').style.display = 'none';
	document.getElementById('menu2').style.display = 'none';
	document.getElementById('menu3').style.display = 'none';
	document.getElementById('menu').style.display = 'none';
}

function playAlbum(n) {
	stopAll();
	document.querySelector("#album" + n + " td:nth-child(2) img:nth-child(1)").style.display = 'none';
	document.querySelector("#album" + n + " td:nth-child(2) img:nth-child(2)").style.display = 'block';
	if (checkCookie("time" + n)) {document.querySelector("#album" + n + " audio").currentTime = getCookie("time" + n);}
	document.querySelector("#album" + n + " audio").play();
}
function pauseAlbum(n) {
	document.querySelector("#album" + n + " td:nth-child(2) img:nth-child(2)").style.display = 'none';
	document.querySelector("#album" + n + " td:nth-child(2) img:nth-child(1)").style.display = 'block';
	document.querySelector("#album" + n + " audio").pause();
	setCookie("time" + n, document.querySelector("#album" + n + " audio").currentTime);
}
function stopAlbum(n) {
	document.querySelector("#album" + n + " td:nth-child(2) img:nth-child(2)").style.display = 'none';
	document.querySelector("#album" + n + " td:nth-child(2) img:nth-child(1)").style.display = 'block';
	document.querySelector("#album" + n + " audio").pause();
	document.querySelector("#album" + n + " audio").currentTime = 0;
	deleteCookie("time" + n);
}
function playNextAlbum(n1, n2) {
	setTimeout(function(){
		stopAlbum(n1);
		playAlbum(n2);
	}, 4000);
}
function stopAll() {
	/* ii should be less than the number of albums plus one */
	for (var ii = 1; ii < 129; ii++) {
		if (document.querySelector("#album" + ii + " audio") != null) {
			if (!document.querySelector("#album" + ii + " audio").paused) {
				pauseAlbum(ii);
			}
		}
	}
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