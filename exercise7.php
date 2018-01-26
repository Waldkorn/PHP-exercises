<?PHP

$a = [[4, 2, 0], [8, 11, 9], [7, 0, 7], [7, 4, 28], [3, 10, 26]];

for ($i = 0 ; $i < count($a) ; $i++) {
	print 'row ' . $i;
	echo '<br>';
	for ($j = 0 ; $j < count($a[$i]) ; $j++) {
		print $a[$i][$j];
		echo '<br>';
	}
}

?>