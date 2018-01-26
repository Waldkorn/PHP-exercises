<?PHP

for ($i = 1 ; $i < 101 ; $i++) {
	if ($i % 3 == 0 and $i % 5 == 0) {
		echo 'WoofMeow <br>';
	} elseif ($i % 3 == 0) {
		echo 'Woof <br>';
	} elseif ($i % 5 == 0) {
		echo 'Meow <br>';
	} else {
		echo $i . "<br>";
	}
}

?>