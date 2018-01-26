<?PHP

/*
Write a PHP function that accepts two parameters, both of them being an array (“array1” and
“array2”). Your function should return a third array (“array3”) that is the sum of the two input
arrays. You should use a for or while loop to implement this function.
Requirements:
● function should accept two arrays
● function should return one (new) array
● your function should use the return statement
Use these sample arrays as input parameters:
$array1 = array(5,6,7,8,9,10,11,12,13,14);
$array2 = array(0,2,4,6,8,10,12,14,16,18);
Expected content of array3:
Array ( [0] => 5 [1] => 8 [2] => 11 [3] => 14 [4] => 17 [5] => 20 [6] => 23 [7] => 26 [8] => 29
[9] => 32 )
*/

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