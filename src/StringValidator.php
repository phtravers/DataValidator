<?php
/**
 * Created by JetBrains PhpStorm.
 * User: philippetraversac
 * Date: 25/11/2014
 * Time: 20:25
 * To change this template use File | Settings | File Templates.
 */

namespace OKLM\DataValidator;

/**
 * Class StringValidator
 * @package OKLM\DataValidator
 */

class StringValidator {


    /**
     * @param $string
     * @param $length
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lengthEqual($string, $length)
    {
        if(!is_string($string) || !is_int($length))
            throw new \Exception('one of the two parameter is not a string or an integer');
        if(mb_strlen($string) === $length)
            return true;
        else
            return false;
    }

    /**
     * @param $string
     * @param $length
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lengthSuperior($string, $length)
    {
        if(!is_string($string) || !is_int($length))
            throw new \Exception('one of the two parameter is not a string or an integer');
        if(mb_strlen($string) > $length)
            return true;
        else
            return false;
    }

    /**
     * @param $string
     * @param $length
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lengthInferior($string, $length)
    {
        if(!is_string($string) || !is_int($length))
            throw new \Exception('one of the two parameter is not a string or an integer');
        if(mb_strlen($string) < $length)
            return true;
        else
            return false;
    }

    /**
     * @param $string
     * @param $minimum
     * @param $maximum
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lengthBetween($string, $minimum, $maximum)
    {
        if(!is_string($string) || !is_int($minimum) || !is_int($maximum) )
            throw new \Exception('one of the two parameter is not a string or an integer');
        $lengthString = mb_strlen($string);
        if($lengthString >= $minimum && $lengthString <= $maximum)
            return true;
        else
            return false;
    }

    /**
     * @param $string
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function spaceBeforeEnd($string)
    {
        if(!is_string($string))
            throw new \Exception('parameter needs to be a string');
        $stringNoSpace = trim($string);
        if($stringNoSpace != $string)
            return true;
        else
            return false;
    }

    /**
     * @param $string
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function hasWhiteSpace($string)
    {
        if(!is_string($string))
            throw new \Exception('parameter needs to be a string');
        $whiteSpace = explode(' ', $string);
        if(count($whiteSpace) > 2)
            return true;
        else
            return false;
    }

}