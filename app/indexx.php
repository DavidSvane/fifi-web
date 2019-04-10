<!DOCTYPE html>
<html>
<head>
	<title>Fifi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="files/style.css?v=<?php echo time();?>"/>
	<link rel="stylesheet" id="mobiling" href="files/style_mobile.css?v=<?php echo time();?>"/>
	<link rel="icon" href="files/icon.ico" type="image/x-icon"/>

	<link rel="apple-touch-icon" href="files/icon.png?v=<?php echo time();?>"/>
	<!--<meta name="apple-mobile-web-app-capable" content="yes">-->
	<meta name="apple-mobile-web-app-status-bar-style" content="white">
	<link rel="manifest" href="manifest.webmanifest?v=<?php echo time();?>">

	<meta name="author" content="Adam Varming, David Svane"/>
	<meta name="description" content="Musik, digte og eventyr - en app med musikterapi for alle"/>
	<meta name="keywords" content="app, fifi, musik, terapi, musikterapi, digte, eventyr, adam, david, varming, svane, hospital, patient"/>

	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="window-target" content="_top">
	<meta http-equiv="expires" content="Mon, 22 Jul 2002 11:12:01 GMT">
	<script src="files/jquery.js"></script>
</head>
<body>
<script type="text/javascript">
	var width = window.innerWidth;
	if (width > 980) {
	} else if (width < 980) {
		document.getElementById('mobiling').href = '';
	} else if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) {
		document.getElementById('mobiling').href = '';
	}
</script>

<?php
	/* 0 menu number, 1 title, 2 title-text, 3 color, 4 back, 5... items (, 18, 1000 at the end for alph and rand) */
	$menus = array(
		array(0, false, "", "whi", 102, 104, 101, 2, 5),
		array(1, true, "Eventyr", "red", 100, 3, 4),
		array(2, true, "Musik", "blu", 100, 105, 19, 6, 22, 23),
		array(3, true, "Hugo Ræv", "pur", 104, 10, 11, 12, 13),
		array(4, true, "For De Små", "pin", 100, 106, 103, 26, 27, 28),
		array(5, true, "Klassisk", "blu", 102, 20, 21),
		array(6, true, "Musikfortællinger", "pin", 104, 24, 25),
		array(7, true, "Musikfortællinger", "pin", 104, 24, 25)
	);
	$relevantList = array(5, 9, 10, 12, 14, 15, 16, 17, 18, 19, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 39, 40, 42, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 129, 130, 131, 132, 133, 134, 135, 136);

	for ($i = 0; $i < count($menus); $i++) {
		if ($menus[$i][1]) {
			echo '<div id="menu' . $i . '" class="menus"><a href="javascript:menuClick(' . $menus[$i][4] . ')" class="back"><img src="files/btn_back.png"/></a><p class="title b_' . $menus[$i][3] . '">' . $menus[$i][2] . '</p><br /><br /><br /><br />';
			for ($j = 5; $j < count($menus[$i]); $j++) {
				echo '<a href="javascript:menuClick(' . $menus[$i][$j] . ')"><img src="files/btn_' . $menus[$i][$j] . '.png?v=' . time() . '"/></a>';
			}
			echo '<br /><br /><br /><br /></div>';
		} else {
			echo '<div id="menu' . $i . '" class="menus">';
			for ($j = 4; $j < count($menus[$i]); $j++) {
				echo '<a href="javascript:menuClick(' . $menus[$i][$j] . ')"><img src="files/btn_' . $menus[$i][$j] . '.png?v=' . time() . '"/></a>';
			}
			echo '<br /><br /><br /><br /><br /></div>';
		}
	}

	require 'files/text.php';

	/*$relevantRand = $relevantList;
	shuffle($relevantRand);
	$finalRand = array();
	$finalRand[0] = "Tilfældig";
	$finalRand[1] = "gry";
	$finalRand[2] = 1000;
	$finalRand[3] = 0;
	for ($jj = 0; $jj < count($relevantList); $jj++) {
		array_push($finalRand, $relevantRand[$jj]);
	}
	$relevantAlph = array();
	for ($jj = 0; $jj < count($relevantList); $jj++) {
		$relevantAlph[$jj][0] = $text1[$relevantList[$jj]];
		$relevantAlph[$jj][1] = $relevantList[$jj];
	}
	sort($relevantAlph);
	$finalAlph = array();
	$finalAlph[0] = "Alfabetisk";
	$finalAlph[1] = "gry";
	$finalAlph[2] = 18;
	$finalAlph[3] = 0;
	for ($jj = 0; $jj < count($relevantList); $jj++) {
		array_push($finalAlph, $relevantAlph[$jj][1]);
	}*/

	/* 0 title, 1 color, 2 page number, 3 back button, rest albums */
	$pages = array(
		array("Klassisk", "blu", 1, 102),
		array("Digte", "yel", 2, 100, 25, 21, 22, 23, 24, 26, 27, 28, 29, 30, 31),
		array("H.C. Andersen", "red", 3, 101, 64, 1, 37, 2, 3, 39, 4, 40, 5, 41, 6, 42, 13),
		array("Den Lille Prins", "red", 4, 101, 227, 228, 229, 230, 231, 232, 233, 234, 235, 236, 237, 238, 239, 240, 241, 242, 243, 244, 245, 246, 247, 248, 249, 250, 251, 252, 253, 254, 255),
		array("Fugle", "gre", 5, 100, 32, 33, 34, 35, 36, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75),
		array("Bent", "blu", 6, 102, 63, 62, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61),
		array("For De Små", "pin", 9, 100),
		array("Hugo Ræv 1", "pur", 10, 103, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87),
		array("Hugo Ræv 2", "pur", 11, 103, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102),
		array("Hugo Ræv 3", "pur", 12, 103, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115),
		array("Hugo Ræv 4", "pur", 13, 103, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128),
		array("Hugo Ræv 5", "pur", 14, 103),
		/*array("Mixerier 1", "tur", 15, 104, 36, 14, 64, 25, 33, 58),
		array("Mixerier 2", "tur", 16, 104, 71, 10, 6, 28, 70, 51),
		array("Mixerier 3", "tur", 17, 104, 73, 12, 13, 31, 75, 62),*/
		array("Arier", "blu", 19, 102, 129, 131, 132, 130, 14, 137, 138, 139, 140, 141, 142, 143, 158),
		array("Opløftende", "blu", 20, 105, 257, 256, 144, 145, 146, 147, 148, 149, 150, 151),
		array("Roligt", "blu", 21, 105, 152, 153, 154, 155, 156, 157, 12, 133, 10, 134, 47, 135, 48, 136, 49, 50),
		array("Vintage Jazz & Swing", "blu", 22, 102, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 173, 174, 175, 176, 177),
		array("Edmundo Ros", "blu", 23, 102, 180, 181, 182, 183, 184, 185, 186, 187),
		array("Rejsen", "pin", 24, 106, 188, 189, 190, 191, 192, 193, 194, 195, 196, 197, 198, 199, 200, 201, 202, 203, 204, 205, 206, 207, 208),
		array("Øen", "pin", 25, 106, 209, 210, 211, 212, 213, 214, 215, 216, 217, 218, 219, 220, 221, 222, 223, 224, 225, 226),
		array("Lydterapi", "pin", 26, 104, 258, 259, 260, 261, 262, 263),
		array("Musik", "pin", 27, 104, 264, 265, 266, 267, 268, 269, 270, 271, 272),
		array("Mindfulness", "pin", 28, 104, 273, 274, 275)
		/*$finalAlph, $finalRand*/
	);

	/*array("Danske Sange", "blu", 7, 102, 15, 16, 17, 18, 19),*/

	for ($i = 0; $i < count($pages); $i++) {
		echo '<div class="pages" id="page' . $pages[$i][2] . '">';
		echo '<a href="javascript:menuClick(' . $pages[$i][3] . ')" class="back"><img src="files/btn_back.png?v=' . time() . '"/></a>';
		echo '<p class="title b_' . $pages[$i][1] . '">' . $pages[$i][0] . '</p><br /><br /><br /><br />';
		for ($j = 4; $j < count($pages[$i]); $j++) {
			echo '<table class="hr e_' . $pages[$i][1] . '" id="album' . $pages[$i][2] . '_' . $pages[$i][$j] . '"><tr>';
			echo '<td><a href="javascript:playAlbum(' . $pages[$i][$j] . ', ' . $pages[$i][2] . ')"><p>' . $text1[$pages[$i][$j]] . '</p><p>' . $text2[$pages[$i][$j]] . '</p><p>' . $text3[$pages[$i][$j]] . '</p></a>';
			echo '</td></tr></table>';
		}
		echo '<br /><br /><br /><br /><br /><br /></div>';
	}
?>

<br /><br /><br />
<audio id="player" preload="none">
	<source id="record" src="" type="audio/mpeg"/>
</audio>
<table class="main_title b_whi">
	<tr>
		<td><a id="playBtn" href="javascript:playAlbum(0, 0)"><img src="files/btn_play_black.png"/></a>
			<a id="pausBtn" href="javascript:pauseAlbum(0, 0)"><img src="files/btn_pause_black.png"/></a></td>
		<td><a href="javascript:menuClick(100)"><img src="files/logo_fifi_b.png"/></a></td>
		<td><a id="stopBtn" href="javascript:stopAlbum(0, 0)"><img src="files/btn_stop_black.png"/></a></td>
	</tr>
	<tr><td colspan="3"><p id="pos"></p><p> ud af </p><p id="dur"></p></td></tr>
</table>
<div id="timer" onclick=""><div id="border"></div></div>
<script src="files/function_nosleep.js?v=<?php echo time();?>"></script>
<script src="files/function_server.js?v=<?php echo time();?>"></script>
<script src="files/functions.js?v=<?php echo time();?>"></script>
<script>
	addStat(0, "usage");
	if (!checkCookie("v")) {
		addStat(0, "visits");
	}
	setCookie("v", 0);
</script>
</body>
</html>
