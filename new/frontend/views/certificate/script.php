<?php ?>
// Custom script

// Show option for generating sample certificate
$('input[type="file"]').change( function(e) {
	$('#sample').show();

	// On clicking, change address
	$('#sample').click(function(e) {
		$('#csv_input').attr("action", <?= '\'' . $sample_url . '\''?>);
		$('#csv_input').submit();
		$('#csv_input').attr("action", <?= '\'' . $generate_url . '\''?>);
	});
});


