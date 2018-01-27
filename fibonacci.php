<?PHP

/*
The Fibonacci sequence is constructed by adding the last two numbers of the sequence so far to get the next number in the sequence. The first and second numbers of the sequence are defined as 0 and 1. We get:

0, 1, 1, 2, 3, 5, 8, 13, 21…

*/

/* exercise 1:

Write a function that returns the nth number of the sequence. This should be pretty easy. Your solution here may well be suitable for one of the next mini-challenges.

Note that for this, I mention a single function, but you may choose to have a “setup function” and a “processing function,” as you see fit.

function nthFibonacciNumber($input) {
	$number1 = 0;
	$number2 = 1;
	for ($i = 2 ; $i < $input ; $i++) {
		$sum = $number1 + $number2;
		$number1 = $number2;
		$number2 = $sum;
	}
	echo $number2;
}
*/

/*exercise 2:

Write the same function, but you may not use a loop; and if you use variables, treat them as constants (within the scope of the function). You may not reassign them.

function fibonacciIteration($limit, $number1, &$number2, $i) {
	if ($limit <= 1) {
		echo 0;
		die();
	}
	$sum = $number1 + $number2;
	$i += 1;
	if ($i < $limit - 2) {
		fibonacciIteration($limit, $number2, $sum, $i);
	}
	$number2 = $sum;
}
$number2 = 1;
fibonacciIteration(1, 0, $number2, 0);
echo $number2;
*/

/*exercise 3: 

Write the same function, but you may not use local variables at all. 



function fibonacciIteration($limit, $number1, $number2, $i) {
	if ($limit <= 1) {
		echo 0;
	} elseif ($i < $limit) {
		fibonacciIteration($limit, $number2, $number1 + $number2, $i + 1);
	} else {
		echo $number2;
	}
}

fibonacciIteration(7, 0, 1, 2);
*/


/*
Write the same function, but the last statement must be a recursive function call. The result of the recursion is returned as-is; it is not transformed in any way, or added to anything. This is a concept called tail recursion, and can be used to optimize processing in languages and compilers that support it.

function fibonacciIteration($limit, $number1, $number2, $i) {
	if ($limit <= 1) {
		echo 0;
		die();
	} elseif ($limit == $i) {
		echo $number2;
		die();
	}
	fibonacciIteration($limit, $number2, $number1 + $number2, $i + 1);
}

fibonacciIteration(9, 0, 1, 2);

*/

/*Write the same function, but this time, you’re not allowed to use recursion.*/

function fibonacciResult($i) {
	echo (((1 + sqrt(5))**$i)-(1 - sqrt(5))**$i) / ((2**$i) * sqrt(5));
}

fibonacciResult(5);

?>