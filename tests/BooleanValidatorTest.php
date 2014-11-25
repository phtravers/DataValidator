<?php
/**
 * Created by JetBrains PhpStorm.
 * User: philippetraversac
 * Date: 25/11/2014
 * Time: 21:50
 * To change this template use File | Settings | File Templates.
 */

namespace Tests\OKLM\DataValidator;

use \OKLM\DataValidator\BooleanValidator;

class BooleanValidatorTest extends \PHPUnit_Framework_TestCase {

    public function testIsTrue()
    {
        $boolean = BooleanValidator::true(true);
        $this->assertTrue($boolean);
    }

    public function testIsNotTrue()
    {
        $boolean = BooleanValidator::true(false);
        $this->assertFalse($boolean);
    }

    public function testIsFalse()
    {
        $boolean = BooleanValidator::false(false);
        $this->assertTrue($boolean);
    }

    public function testIsNotFalse()
    {
        $boolean = BooleanValidator::false(true);
        $this->assertFalse($boolean);
    }


}