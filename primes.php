<?PHP

	function getPrimes($limit) {
		//2 is the oddest prime ;)
		$primes = array(2);
		if ($limit > 2) {
			for ($number = 3 ; $number < $limit ; $number++) {
				$result = true;
				for ($index = 0 ; $index < count($primes) ; $index++) {
					if ($number % $primes[$index] == 0) {
						$result = false;
					}
				}
				if ($result == true) {
					$primes[] = $number;
				}
			}
			echo "2";
			for ($i = 1 ; $i < count($primes) ; $i++) {
				echo ", " . $primes[$i];
			}
		} else {
			echo "Please provide limit greater than 2";
		}
	}

	getPrimes(1000);

?>