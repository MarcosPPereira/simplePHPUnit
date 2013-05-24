<?php

/**
* Util to converter number format
*/

/**
 * Format a number in algarism roman, roman numeral
 * @param  $number Number between 1 to 3000
 * @return String whith roman number
 * @link http://www.go4expert.com/articles/roman-php-t4948/
 */
function digitsToRoman($number)
{
	// throw exception
	$romans = array(
	    'M' => 1000,
	    'CM' => 900,
	    'D' => 500,
	    'CD' => 400,
	    'C' => 100,
	    'XC' => 90,
	    'L' => 50,
	    'XL' => 40,
	    'X' => 10,
	    'IX' => 9,
	    'V' => 5,
	    'IV' => 4,
	    'I' => 1,
	);

	$romanNumber = "";

	foreach ($romans as $roman => $value) {
		$matches = intval($number / $value);
		$romanNumber .= str_repeat($roman, $matches);
		$number = $number % $value;
	}

	return $romanNumber;
}

function romanToDigits($roman)
{
	//todo
}
?>