<?php

/**
* Util to converter number format
*/

// List some equivalence between digits and roman numerals
$romansDigits = array(
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

/**
 * Format a number in algarism roman, roman numeral
 * @param  $number Number between 1 to 3000
 * @return String whith roman number
 * @link http://www.go4expert.com/articles/roman-php-t4948/
 */
function digitToRoman($digit)
{
	if ( !is_numeric($digit)) {
    	throw new InvalidArgumentException;
    }
	global $romansDigits;
	$roman = "";
	foreach ($romansDigits as $romanValue => $digitValue) {
		$matches = intval($digit / $digitValue);
		$roman .= str_repeat($romanValue, $matches);
		$digit = $digit % $digitValue;
	}
	return $roman;
}

/**
 * Format a number in algarism roman, roman numeral
 * @param  $roman String whith roman number
 * @return Number between 1 to 3000
 * @link http://stackoverflow.com/questions/6265596/how-to-convert-a-roman-numeral-to-integer-in-php
 */
function romanToDigit($roman)
{
	// TODO try exception if not roman
	global $romansDigits;
	$digit = 0;
	foreach ($romansDigits as $romanValue => $digitValue) {
		while (strpos($roman, $romanValue) === 0) {
			$digit += $digitValue;
			$roman = substr($roman, strlen($romanValue));
		}
	}
	return $digit;
}

?>