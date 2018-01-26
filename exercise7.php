<?PHP
/*
In the previous exercises we covered (for) loops. In this exercise we use nested loops (one
for loop inside another for loop). We use these nested loops to print data from a
2-dimensional array. To learn more about two dimensional arrays and nested loops please
watch the following videos before working on this exercise:
two dimensional arrays: https://www.youtube.com/watch?v=ApHNRy2NQgg
nested loops: https://www.youtube.com/watch?v=r_8oqJeoiHU
Instruction
Use nested for loops to print
Sample​ ​array:
var a = [[4, 2, 0], [8, 11, 9], [7, 0, 7], [7, 4, 28], [3, 10, 26]];
Sample​ ​Output:
"row 0"
"4"
"2"
"0"
"row 1"
“8”
“11”
“9”
… etc
*/

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