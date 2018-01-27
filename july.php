<?PHP

	date_default_timezone_set('UTC');

	if (date('F') == "July") {
		echo "It's July, so it can get really hot.";
	} else {
		echo "It’s not July, so at least we’re not in the peak of the heat.";
	}

?>
