<?php
header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');

function dirArray($dir) {

  $result = array();
  $scan = scandir($dir);

  for ($i = 2; $i < count($scan); $i++) {

    if (is_file($dir.'/'.$scan[$i])) {

      $file = explode('.',$scan[$i]);

      $result[$i]['file'] = true;
      $result[$i]['name'] = $file[0];
      $result[$i]['ext'] = $file[1];
      $result[$i]['size'] = filesize($dir.'/'.$scan[$i]);
      $result[$i]['dir'] = $dir;

    } else {

      $result[$i]['file'] = false;
      $result[$i]['title'] = $scan[$i];
      $result[$i]['dir'] = $dir.'/'.$scan[$i];
      $result[$i]['cnt'] = dirArray($dir.'/'.$scan[$i]);

    }

  }

  return $result;

}

echo(
  utf8_encode(
    json_encode(
      dirArray('files/audio'))));

?>
