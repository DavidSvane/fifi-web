<!DOCTYPE html>
<html>
	<head>
		<title>Fifi - musik, digte og eventyr</title>
		<link rel="stylesheet" href="filer/style.css"/>
		<link rel="icon" href="filer/icon.ico" type="image/x-icon"/>
		<meta name="author" content="Adam Varming, David Svane"/>
		<meta name="description" content="Musik, digte og eventyr - en app med musikterapi for alle"/>
		<meta name="keywords" content="app, fifi, musik, terapi, musikterapi, digte, eventyr, adam, david, varming, svane, hospital, patient"/>
		<meta http-equiv="cache-control" content="no-cache">
		<meta http-equiv="pragma" content="no-cache">
		<meta http-equiv="window-target" content="_top">
		<meta http-equiv="expires" content="22 jul 2002 11:12:01 gmt">
	</head>
	<body>
		<!--<script type="text/javascript">
			var width = window.innerWidth;
			if (width < 990) {window.location.href = "filer/part_index_m.html";}
			if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) window.location.href = "filer/part_index_m.html";;
		</script>-->
		<center><div id="hvid"></div></center>
		<?php require "filer/part_menu.php";?>
		
		<center><div id="content"><?php
			if (!empty($_GET)) {
				$side = $_GET['side'];
				switch ($side) {
					case 1: require "filer/part_start.php"; echo '<style>html {background: #00a9fe fixed; background: -webkit-linear-gradient(left, #00a9fe, white, white, white, white, white, white, white, #00a9fe) fixed; background: -o-linear-gradient(right, #00a9fe, white, white, white, white, white, white, white, #00a9fe) fixed; background: -moz-linear-gradient(right, #00a9fe, white, white, white, white, white, white, white, #00a9fe) fixed; background: linear-gradient(to right, #00a9fe, white, white, white, white, white, white, white, #00a9fe) fixed;}</style>'; break;
					case 2: require "filer/part_app.php"; echo '<style>html {background: #e7402e fixed; background: -webkit-linear-gradient(left, #e7402e, white, white, white, white, white, white, white, #e7402e) fixed; background: -o-linear-gradient(right, #e7402e, white, white, white, white, white, white, white, #e7402e) fixed; background: -moz-linear-gradient(right, #e7402e, white, white, white, white, white, white, white, #e7402e) fixed; background: linear-gradient(to right, #e7402e, white, white, white, white, white, white, white, #e7402e) fixed;}</style>'; break;
					case 3: require "filer/part_teamet.php"; echo '<style>html {background: #28a135 fixed; background: -webkit-linear-gradient(left, #28a135, white, white, white, white, white, white, white, #28a135) fixed; background: -o-linear-gradient(right, #28a135, white, white, white, white, white, white, white, #28a135) fixed; background: -moz-linear-gradient(right, #28a135, white, white, white, white, white, white, white, #28a135) fixed; background: linear-gradient(to right, #28a135, white, white, white, white, white, white, white, #28a135) fixed;}</style>'; break;
					case 4: require "filer/part_historien.php"; echo '<style>html {background: #e7402e fixed; background: -webkit-linear-gradient(left, #e7402e, white, white, white, white, white, white, white, #e7402e) fixed; background: -o-linear-gradient(right, #e7402e, white, white, white, white, white, white, white, #e7402e) fixed; background: -moz-linear-gradient(right, #e7402e, white, white, white, white, white, white, white, #e7402e) fixed; background: linear-gradient(to right, #e7402e, white, white, white, white, white, white, white, #e7402e) fixed;}</style>'; break;
					case 5: require "filer/part_stemmer.php"; echo '<style>html {background: #febe00 fixed; background: -webkit-linear-gradient(left, #febe00, white, white, white, white, white, white, white, #febe00) fixed; background: -o-linear-gradient(right, #febe00, white, white, white, white, white, white, white, #febe00) fixed; background: -moz-linear-gradient(right, #febe00, white, white, white, white, white, white, white, #febe00) fixed; background: linear-gradient(to right, #febe00, white, white, white, white, white, white, white, #febe00) fixed;}</style>'; break;
					case 6: require "filer/part_tak.php"; echo '<style>html {background: #a900fe fixed; background: -webkit-linear-gradient(left, #a900fe, white, white, white, white, white, white, white, #a900fe) fixed; background: -o-linear-gradient(right, #a900fe, white, white, white, white, white, white, white, #a900fe) fixed; background: -moz-linear-gradient(right, #a900fe, white, white, white, white, white, white, white, #a900fe) fixed; background: linear-gradient(to right, #a900fe, white, white, white, white, white, white, white, #a900fe) fixed;}</style>'; break;
					case 7: require "filer/part_rettigheder.php"; echo '<style>html {background: #a900fe fixed; background: -webkit-linear-gradient(left, #a900fe, white, white, white, white, white, white, white, #a900fe) fixed; background: -o-linear-gradient(right, #a900fe, white, white, white, white, white, white, white, #a900fe) fixed; background: -moz-linear-gradient(right, #a900fe, white, white, white, white, white, white, white, #a900fe) fixed; background: linear-gradient(to right, #a900fe, white, white, white, white, white, white, white, #a900fe) fixed;}</style>'; break;
					default: require "filer/part_start.php"; echo '<style>html {background: #e7402e fixed; background: -webkit-linear-gradient(left, #e7402e, white, white, white, white, white, white, white, #e7402e) fixed; background: -o-linear-gradient(right, #e7402e, white, white, white, white, white, white, white, #e7402e) fixed; background: -moz-linear-gradient(right, #e7402e, white, white, white, white, white, white, white, #e7402e) fixed; background: linear-gradient(to right, #e7402e, white, white, white, white, white, white, white, #e7402e) fixed;}</style>'; break;
				}
			} else {
				require "filer/part_start.php";
				echo '<style>html {background: #00a9fe fixed; background: -webkit-linear-gradient(left, #00a9fe, white, white, white, white, white, white, white, #00a9fe) fixed; background: -o-linear-gradient(right, #00a9fe, white, white, white, white, white, white, white, #00a9fe) fixed; background: -moz-linear-gradient(right, #00a9fe, white, white, white, white, white, white, white, #00a9fe) fixed; background: linear-gradient(to right, #00a9fe, white, white, white, white, white, white, white, #00a9fe) fixed;}</style>'; 
			}
		?>
		
		<br /><br /><br /><br />
		
		<?php require "filer/part_info.php";?></div></center>
		<div id="white_bg"></div>
	</body>
</html>