<?php

namespace Tests\OKLM\DataValidator;

use \OKLM\DataValidator\ArrayValidator;
/**
 * Class ArrayValidatorTest
 * @package Tests\OKLM\DataValidator
 */
class ArrayValidatorTest extends \PHPUnit_Framework_TestCase {


    public function testArrayIsEmpty()
    {
        $array = array();
        $boolean = ArrayValidator::isEmpty($array);
        $this->assertTrue($boolean);
    }


    public function testArrayIsNotEmpty()
    {
        $array = array('key' => 'cerise');
        $boolean = ArrayValidator::isEmpty($array);
        $this->assertFalse($boolean);
    }

    public function testArrayIsEqualTo()
    {
        $array = array('Tulipe' => 1);
        $boolean = ArrayValidator::compareOperator($array, ArrayValidator::LENGTH_EQUAL, 1);
        $this->assertTrue($boolean);
    }

    public function testArrayIsNotEqualTo()
    {
        $array = array('Tulipe' => 1);
        $boolean = ArrayValidator::compareOperator($array, ArrayValidator::LENGTH_EQUAL, 3);
        $this->assertFalse($boolean);
    }

    public function testArrayIsInferior()
    {
        $array = array('Tulipe' => 1, 'Rose' => 4);
        $boolean = ArrayValidator::compareOperator($array, ArrayValidator::LENGTH_INFERIOR, 10);
        $this->assertTrue($boolean);
    }

    public function testArrayIsSuperior()
    {
        $array = array('Tulipe' => 2, 'Rose' => 4);
        $boolean = ArrayValidator::compareOperator($array, ArrayValidator::LENGTH_SUPERIOR, 1);
        $this->assertTrue($boolean);
    }

    public function testArrayIsInferiorOrEqual()
    {
        $array = array('Tulipe' => 2, 'Rose' => 4);
        $boolean = ArrayValidator::compareOperator($array, ArrayValidator::LENGTH_INFERIOR_OR_EQUAL, 2);
        $this->assertTrue($boolean);
    }

    public function testArrayIsSuperiorOrEqual()
    {
        $array = array('Tulipe' => 2, 'Rose' => 4);
        $boolean = ArrayValidator::compareOperator($array, ArrayValidator::LENGTH_SUPERIOR_OR_EQUAL, 2);
        $this->assertTrue($boolean);
    }

    public function testIsBetween()
    {
        $array = array('Tulipe' => 1, 'Rose' => 4);
        $boolean = ArrayValidator::arrayBetween($array, 1, 2);
        $this->assertTrue($boolean);
    }

    public function testIsNotBetween()
    {
        $array = array('Tulipe' => 1, 'Rose' => 7);
        $boolean = ArrayValidator::arrayBetween($array, 3, 5);
        $this->assertFalse($boolean);
    }

    public function testKeyExists()
    {
        $array = array('Tulipe' => 1, 'Rose' => 4);
        $boolean = ArrayValidator::keyExists($array, 'Tulipe');
        $this->assertTrue($boolean);
    }

    public function testKeyNotExists()
    {
        $array = array('Tulipe' => 1, 'Rose' => 4);
        $boolean = ArrayValidator::keyExists($array, 'Pamplemousse');
        $this->assertFalse($boolean);
    }

    public function testValueExists()
    {
        $array = array('Tulipe' => 1, 'Rose' => 4);
        $bool = ArrayValidator::valueExists($array, '1');
        $this->assertTrue($bool);
    }

    public function testValueNotExists()
    {
        $array = array('Tulipe' => 1, 'Rose' => 4);
        $boolean = ArrayValidator::valueExists($array, '2');
        $this->assertFalse($boolean);
    }




}