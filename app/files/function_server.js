function addStat(t, v) {
	$.ajax({
		url: "files/stats.php",
		type: "post",
		data: {"t":t, "v":v}
	});
}