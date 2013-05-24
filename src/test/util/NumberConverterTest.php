<?php
require_once __DIR__."/../../app/util/NumberConverter.php";

/**
 * TestCaste to util NumberConvert
 */
class NumberConverterTest extends PHPUnit_Framework_TestCase
{

  public function setUp()
  {
  }

  /**
    * @expectedException InvalidArgumentException
    */
  public function testThrowsExceptionIfNonNumberIsPassed()
  {
    digitToRoman('a');
  }

  /**
   * Test of the digitToRoman function
   * @dataProvider provider
   */
  public function testDigitToRoman($digit, $roman)
  {
    $this->assertEquals($roman, digitToRoman($digit));
  }

  /**
   * Test of the romanToDigit function
   * @dataProvider provider
   */
  public function testRomanToDigit($digit, $roman)
  {
    $this->assertEquals($digit, romanToDigit($roman));
  }

  /**
   * Dataprovider to test of the digitToRoman and romanToDigit functions
   */
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