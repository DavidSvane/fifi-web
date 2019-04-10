function menuClick(n) {
	if (n == 0) {
		hideAll();
		/*document.getElementById('header').style.backgroundColor = 'rgb(50, 177, 254)';*/
		document.getElementById('menu').style.display = 'block';
	} else if (n == 100) {
		hideAll();
		document.getElementById('menu2').style.display = 'block';
	} else if (n == 101) {
		hideAll();
		document.getElementById('menu1').style.display = 'block';
	} else {
		hideAll();
		/*document.getElementById('h_title').src = 'files/h_title' + n + '.png';
		changeHeaderLink(n);
		changeHeaderColor(n);
		document.getElementById('header').style.display = 'block';
		document.getElementById('page' + n).style.paddingTop = document.getElementById('header').offsetHeight + 'px';*/
		document.getElementById('page' + n).style.display = 'block';
	}
}

function hideAll() {
	/*document.getElementById('header').style.display = 'none';*/
	document.getElementById('page1').style.display = 'none';
	document.getElementById('page2').style.display = 'none';
	document.getElementById('page3').style.display = 'none';
	document.getElementById('page4').style.display = 'none';
	document.getElementById('page5').style.display = 'none';
	document.getElementById('page6').style.display = 'none';
	document.getElementById('page7').style.display = 'none';
	document.getElementById('page8').style.display = 'none';
	document.getElementById('menu1').style.display = 'none';
	document.getElementById('menu2').style.display = 'none';
	document.getElementById('menu').style.display = 'none';
	/*document.getElementById('header_a').href = 'javascript:menuClick(0)';
	document.getElementById('header').style.backgroundColor = 'rgb(50, 177, 254)';*/
}

/*function changeHeaderLink(n) {
	if (n == 1 || n == 6 || n == 7) {
		document.getElementById('header_a').href = 'javascript:menuClick(100)';
	} else if (n == 3 || n == 4) {
		document.getElementById('header_a').href = 'javascript:menuClick(101)';
	}
}

function changeHeaderColor(n) {
	switch (n) {
		case 2: document.getElementById('header').style.backgroundColor = 'rgb(241, 188, 0)'; break;
		case 3:
		case 4: document.getElementById('header').style.backgroundColor = 'rgb(254, 94, 96)'; break;
		case 5: document.getElementById('header').style.backgroundColor = 'rgb(87, 175, 84)'; break;
		case 8: document.getElementById('header').style.backgroundColor = 'rgb(175, 109, 254)'; break;
	}
}*/

function playAlbum(n) {
	stopAll();
	document.querySelector("#album" + n + " img:nth-child(1)").style.display = 'none';
	document.querySelector("#album" + n + " img:nth-child(2)").style.display = 'block';
	if (checkCookie("time" + n)) {document.querySelector("#album" + n + " audio").currentTime = getCookie("time" + n);}
	document.querySelector("#album" + n + " audio").play();
}
function pauseAlbum(n) {
	document.querySelector("#album" + n + " img:nth-child(2)").style.display = 'none';
	document.querySelector("#album" + n + " img:nth-child(1)").style.display = 'block';
	document.querySelector("#album" + n + " audio").pause();
	setCookie("time" + n, document.querySelector("#album" + n + " audio").currentTime);
}
function stopAlbum(n) {
	document.querySelector("#album" + n + " img:nth-child(2)").style.display = 'none';
	document.querySelector("#album" + n + " img:nth-child(1)").style.display = 'block';
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
	for (var ii = 1; ii < 76; ii++) {
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