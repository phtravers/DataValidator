<?php
/**
 * Created by JetBrains PhpStorm.
 * User: philippetraversac
 * Date: 25/11/2014
 * Time: 18:27
 * To change this template use File | Settings | File Templates.
 */

namespace Tests\OKLM\DataValidator;

use \OKLM\DataValidator\IntegerValidator;


class IntegerValidatorTest extends \PHPUnit_Framework_TestCase {


    public function testIsEqual()
    {
        $number = mt_rand(0, 30);
        $boolean = IntegerValidator::equal($number, $number);
        $this->assertEquals($boolean, true);
    }

    public function testIsSuperior()
    {
        $superior = mt_rand(10, 20);
        $inferior = mt_rand(1, 9);
        $boolean = IntegerValidator::superior($superior, $inferior);
        $this->assertEquals($boolean, true);
    }

    public function testIsInferior()
    {
        $superior = mt_rand(10, 20);
        $inferior = mt_rand(1, 9);
        $boolean = IntegerValidator::inferior($inferior, $superior);
        $this->assertEquals($boolean, true);
    }

    public function testBetween()
    {
        $number = mt_rand(1, 10);
        $boolean = IntegerValidator::between($number, 1, 10);
        $this->assertEquals($boolean, true);
    }

    public function testIsNegative()
    {
        $number = mt_rand(-10, -1);
        $boolean = IntegerValidator::negative($number);
        $this->assertEquals($boolean, true);
    }

    public function testIsNotNegative()
    {
        $number = mt_rand(10, 20);
        $boolean = IntegerValidator::negative($number);
        $this->assertFalse($boolean);
    }

    public function testIsPositive()
    {
        $number = mt_rand(1, 10);
        $boolean = IntegerValidator::positive($number);
        $this->assertEquals($boolean, true);
    }

    public function testIsNotPositive()
    {
        $number = mt_rand(-10, -1);
        $boolean = IntegerValidator::positive($number);
        $this->assertFalse($boolean);
    }
}