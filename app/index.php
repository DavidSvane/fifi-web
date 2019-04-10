<!DOCTYPE html>
<html>
<head>
	<title>Fifi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="files/style.css?v=<?php echo time();?>"/>
	<link rel="icon" href="files/icon.ico" type="image/x-icon"/>

	<link rel="apple-touch-icon" href="files/icon.png?v=<?php echo time();?>"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="white">
	<link rel="manifest" href="manifest.webmanifest?v=<?php echo time();?>">

	<meta name="author" content="Adam Varming, David Svane"/>
	<meta name="description" content="Musik, digte og eventyr - en app med musikterapi for alle"/>
	<meta name="keywords" content="app, fifi, musik, terapi, musikterapi, digte, eventyr, adam, david, varming, svane, hospital, patient"/>

	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="window-target" content="_top">
	<meta http-equiv="expires" content="Mon, 22 Jul 2002 11:12:01 GMT">

  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script src="files/jquery.js"></script>
</head>
<body>

<div id="cnt">
  <div id="music_cnt">
    <div class="menu" id="_"></div>
  </div>

  <div id="controls">
    <div>
      <a id="bb"><img src="files/fifi_w.png"/></a>
    </div>
    <div id="progress">
      <div id="progression">
        <div id="title">Intet valgt...</div>
        <div id="time">00:00:00 / 00:00:00</div>
      </div>
    </div>
    <div id="btns">
      <div id="play"><i class="material-icons">play_arrow</i></div>
      <div id="pause"><i class="material-icons">pause</i></div>
    </div>
    <audio></audio>
  </div>
</div>


<script src="files/function_nosleep.js?v=<?php echo time();?>"></script>
<script src="files/function_server.js?v=<?php echo time();?>"></script>
<script src="files/functions.js?v=<?php echo time();?>"></script>
<script>
  $.post('http://app.fifi.dk/content.php', function (d) {
    console.log(d);
    divGenerator(d); });
</script>
</body>
</html>
