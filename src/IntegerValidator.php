<?php
/**
 * Created by JetBrains PhpStorm.
 * User: philippetraversac
 * Date: 25/11/2014
 * Time: 18:26
 * To change this template use File | Settings | File Templates.
 */

namespace OKLM\DataValidator;
/**
 * Class IntegerValidator
 * @package OKLM\DataValidator
 */
class IntegerValidator {


    /**
     * @param $a
     * @param $b
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function equal($a, $b)
    {
        if(!is_int($a) || !is_int($b))
            throw new \Exception('one of the two parameter is not an integer');

        if($a == $b)
            return true;
        else
            return false;
    }

    /**
     * @param $a
     * @param $b
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function superior($a, $b)
    {
        if(!is_int($a) || !is_int($b))
            throw new \Exception('one of the two parameter is not an integer');
        if($a > $b)
            return true;
        else
            return false;
    }

    /**
     * @param $a
     * @param $b
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function inferior($a, $b)
    {
        if(!is_int($a) || !is_int($b))
            throw new \Exception('one of the two parameter is not an integer');
        if($a < $b)
            return true;
        else
            return false;
    }

    /**
     * @param $number
     * @param $minimum
     * @param $maximum
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function between($number, $minimum, $maximum)
    {
        if(!is_int($number) || !is_int($minimum) || !is_int($maximum))
            throw new \Exception('one of the three parameter is not an integer');
        if($number <= $maximum && $number >= $minimum)
            return true;
        else
            return false;
    }

    /**
     * @param $number
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function negative($number)
    {
        if(!is_int($number))
            throw new \Exception('one of the parameter is not an integer');
        if($number <= 0)
            return true;
        else
            return false;
    }

    /**
     * @param $number
     *
     * @return bool
     *
     * @throws \Exception
     */

    public static function positive($number)
    {
        if(!is_int($number))
            throw new \Exception('The parameter needs to be an integer');
        if($number >= 0)
            return true;
        else
            return false;
    }

}