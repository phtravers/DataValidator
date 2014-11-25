<?php
/**
 * Created by JetBrains PhpStorm.
 * User: philippetraversac
 * Date: 25/11/2014
 * Time: 20:25
 * To change this template use File | Settings | File Templates.
 */

namespace Tests\OKLM\DataValidator;

use \OKLM\DataValidator\StringValidator;

class StringValidatorTest extends \PHPUnit_Framework_TestCase {

    public function testStringIsEqual()
    {
        $string = str_shuffle("dqsoidjqsododshdqio");
        $length = mb_strlen($string);
        $boolean = StringValidator::lengthEqual($string, $length);
        $this->assertTrue($boolean);
    }

    public function testStringIsNotEqual()
    {
        $string = str_shuffle("fjqfjqsofjqsoi");
        $length = mb_strlen($string);
        $boolean = StringValidator::lengthEqual($string, $length - 10);
        $this->assertFalse($boolean);
    }

    public function testStringIsSuperior()
    {
        $string = str_shuffle("dqsoidjqsododshdqio");
        $boolean = StringValidator::lengthSuperior($string , 1);
        $this->assertTrue($boolean);
    }

    public function testStringIsNotSuperior()
    {
        $string = str_shuffle("fjqfjqsofjqsoi");
        $boolean = StringValidator::lengthSuperior($string , 9999);
        $this->assertFalse($boolean);
    }

    public function testStringIsInferior()
    {
        $string = str_shuffle("dqsoidjqsododshdqio");
        $length = mb_strlen($string) + 10;
        $boolean = StringValidator::lengthInferior($string , $length);
        $this->assertEquals($boolean, true);
    }

    public function testStringIsNotInferior()
    {
        $string = str_shuffle("fjqfjqsofjqsoi");
        $length = mb_strlen($string);
        $boolean = StringValidator::lengthInferior($string , $length - 10);
        $this->assertFalse($boolean);
    }

    public function testStringIsBeetween()
    {
        $string = str_shuffle("dqsoidjqsododshdqio");
        $length = mb_strlen($string);
        $boolean = StringValidator::lengthBetween($string , $length - 10, $length + 10);
        $this->assertTrue($boolean);
    }

    public function testStringIsNotBeetween()
    {
        $string = str_shuffle("fjqfjqsofjqsoi");
        $length = mb_strlen($string);
        $boolean = StringValidator::lengthBetween($string , $length + 10, $length - 10);
        $this->assertFalse($boolean);
    }

    public function testStringHasWhiteSpaceEnd()
    {
        $string = "fsffsqfsqf ";
        $boolean = StringValidator::spaceBeforeEnd($string);
        $this->assertTrue($boolean);
    }

    public function testStringHasNoWhiteSpaceEnd()
    {
        $string = "fdfsfsqfqsf";
        $boolean = StringValidator::spaceBeforeEnd($string);
        $this->assertFalse($boolean);
    }

    public function testStringHasWhiteSpace()
    {
        $string = "fsdfsf fsdfs fdsd";
        $boolean = StringValidator::hasWhiteSpace($string);
        $this->assertTrue($boolean);
    }

    public function testStringHasNoWhiteSpace()
    {
        $string = "fsfsfsfs";
        $boolean = StringValidator::hasWhiteSpace($string);
        $this->assertFalse($boolean);
    }

}