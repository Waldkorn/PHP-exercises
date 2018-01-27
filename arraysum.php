<?PHP

$array1 = array(5,6,7,8,9,10,11,12,13,14);
$array2 = array(0,2,4,6,8,10,12,14,16,18);

function arraySum($array1, $array2) {
	if (count($array1) == count($array2)) {
		for ($i = 0 ; $i < count($array1) ; $i++) {
			$array3[$i] = $array1[$i] + $array2[$i];
		}
		return $array3;
	} else {
		echo "arrays must be of equal size";
	}
}

var_dump(arraySum($array1, $array2));

?>
