<?php
require_once __DIR__."/../../app/util/NumberConverter.php";

/**
 * TestCaste to NumberConvert
 */
class NumberConverterTest extends PHPUnit_Framework_TestCase
{

	  public function setUp()
    {
    }

    /**
     * @dataProvider provider
     */
    public function testDigitsToRoman($number, $roman)
    {
      	$this->assertEquals($roman, digitsToRoman($number));
    }

    public function provider()
    {
        return array(
          array(1, "I"),
          array(10, "X"),
          array(16, "XVI"),
          array(55, "LV"),
          array(95, "XCV"),
          array(100, "C"),
          array(266, "CCLXVI"),
          array(500, "D"),
          array(1000, "M"),
          array(2555, "MMDLV")
        );
    }

    public function tearDown()
    {
    }

}

?>