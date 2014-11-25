<?php
/**
 * Created by JetBrains PhpStorm.
 * User: philippetraversac
 * Date: 25/11/2014
 * Time: 22:42
 * To change this template use File | Settings | File Templates.
 */

namespace OKLM\DataValidator;
/**
 * Class ArrayValidator
 * @package OKLM\DataValidator
 */
class ArrayValidator {

    const EQUAL = 0;
    const INFERIOR = 1;
    const SUPERIOR = 2;
    const INFERIOR_OR_EQUAL = 3;
    const SUPERIOR_OR_EQUAL = 4;

    /**
     * @param $array
     *
     * @return bool
     *
     * @throws \Exception
     */

    public static function isEmpty($array)
    {
        if(!is_array($array))
            throw new \Exception('parameter is not an array');
        if(count($array) == 0)
            return true;
        else
            return false;
    }

    /**
     * @param $array
     * @param $comparator
     * @param $number
     *
     * @return bool|int
     *
     * @throws \Exception
     */

    public static function compareOperator($array, $comparator, $number)
    {
        if(!is_array($array) || !is_int($number))
            throw new \Exception('parameter is not an array or an integer');
        if (!in_array($comparator, [
            self::EQUAL,
            self::INFERIOR,
            self::SUPERIOR,
            self::SUPERIOR_OR_EQUAL,
            self::INFERIOR_OR_EQUAL,
        ])) {
            throw new \Exception('The second parameter is not accepted');
        }
        $arrayLength = count($array);
        $result = 0;
        switch ($comparator) {
            case self::EQUAL:
                $result = $arrayLength === $number;
                break;
            case self::INFERIOR:
                $result = $arrayLength < $number;
                break;
            case self::SUPERIOR:
                $result = $arrayLength > $number;
                break;
            case self::INFERIOR_OR_EQUAL:
                $result = $arrayLength <= $number;
                break;
            case self::SUPERIOR_OR_EQUAL:
                $result = $arrayLength >= $number;
                break;
        }
        return $result;
    }


    /**
     * @param $array
     * @param $minimum
     * @param $maximum
     *
     * @return bool
     *
     * @throws \Exceptio
     */
    public static function arrayBetween($array, $minimum, $maximum)
    {
        if(!is_array($array) || !is_int($minimum) || !is_int($maximum))
            throw new \Exception('First parameter is not an array');
        $arrayLength = count($array);
        if($arrayLength >= $minimum && $arrayLength <= $maximum)
            return true;
        else
            return false;
    }

    /**
     * @param $array
     * @param $key
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function keyExists($array, $key)
    {
        if(!is_array($array) || !is_string($key))
            throw new \Exception('parameters not good');
        if(array_key_exists($key, $array))
            return true;
        else
            return false;
    }

    /**
     * @param $array
     * @param $value
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function valueExists($array, $value)
    {
        if(!is_array($array))
            throw new \Exception('First parameter is not an array');
        if(!is_string($value))
            throw new \Exception('Second parameter is not a string');
        if(in_array($value, $array))
            return true;
        else
            return false;
    }

}