<!DOCTYPE html>
<html>
	<head>
		<title>Fifi Stats</title>
	</head>
	<body id="stats">

<h1>Fifi Stats</h1>
<p>Siden 2017-04-10</p>
<?php
	if (file_get_contents('stats/lock.txt') == 0) {
		file_put_contents('stats/lock.txt', 1);
		
		file_exists('stats/stats.txt') ? $file0 = eval("return " . file_get_contents('stats/stats.txt') . ";") : $file0 = array();
		file_exists('stats/stats' . date('Y') . '00.txt') ? $file1 = eval("return " . file_get_contents('stats/stats' . date('Y') . '00.txt') . ";") : $file1 = array();
		file_exists('stats/stats' . date('Ym') . '.txt') ? $file2 = eval("return " . file_get_contents('stats/stats' . date('Ym') . '.txt') . ";") : $file2 = array();
		
		if (isset($_POST['t'])) { if ($_POST['t'] == 0 && isset($_POST['v'])) {
			$file0[$_POST['v']] = $file0[$_POST['v']] + 1;
			$file1[$_POST['v']] = $file1[$_POST['v']] + 1;
			$file2[$_POST['v']] = $file2[$_POST['v']] + 1;
			
			arsort($file0);
			arsort($file1);
			arsort($file2);
			
			file_put_contents('stats/stats.txt', var_export($file0, true));
			file_put_contents('stats/stats' . date('Y') . '00.txt', var_export($file1, true));
			file_put_contents('stats/stats' . date('Ym') . '.txt', var_export($file2, true));
			
			if (!file_exists('stats/xstats' . date('Ymd') . '.txt')) {
				$super = array($file0, $file1, $file2);
				file_put_contents('stats/xstats' . date('Ymd') . '.txt', var_export($super, true));
			}
		}} else {
			require 'text.php';
			
			echo '<h2>' . date('M') . '</h2><table><tr style="font-weight:bold"><td>Besøgende: </td><td>' . $file2['visits'] . '</td></tr><tr style="font-weight:bold"><td>Gange brugt: </td><td>' . $file2['usage'] . '</td></tr>';
			foreach($file2 as $key => $val) { if ($key != 'visits' && $key != 'usage') { echo '<tr><td>' . $text1[substr($key, 5)] . ', ' . $text2[substr($key, 5)] . ': </td><td>' . $val . '</td></tr>'; } }
			echo '</table>';
			
			echo '<h2>' . date('Y') . '</h2><table><tr style="font-weight:bold"><td>Besøgende: </td><td>' . $file1['visits'] . '</td></tr><tr style="font-weight:bold"><td>Gange brugt: </td><td>' . $file1['usage'] . '</td></tr>';
			foreach($file1 as $key => $val) { if ($key != 'visits' && $key != 'usage') { echo '<tr><td>' . $text1[substr($key, 5)] . ', ' . $text2[substr($key, 5)] . ': </td><td>' . $val . '</td></tr>'; } }
			echo '</table>';
			
			echo '<h2>Total</h2><table><tr style="font-weight:bold"><td>Besøgende: </td><td>' . $file0['visits'] . '</td></tr><tr style="font-weight:bold"><td>Gange brugt: </td><td>' . $file0['usage'] . '</td></tr>';
			foreach($file0 as $key => $val) { if ($key != 'visits' && $key != 'usage') { echo '<tr><td>' . $text1[substr($key, 5)] . ', ' . $text2[substr($key, 5)] . ': </td><td>' . $val . '</td></tr>'; } }
			echo '</table>';
		}
		file_put_contents('stats/lock.txt', 0);
	}
?>
<br /><br />

	</body>
</html>