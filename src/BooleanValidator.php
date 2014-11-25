<?php
/**
 * Created by JetBrains PhpStorm.
 * User: philippetraversac
 * Date: 25/11/2014
 * Time: 21:45
 * To change this template use File | Settings | File Templates.
 */

namespace OKLM\DataValidator;
/**
 * Class BooleanValidator
 * @package OKLM\DataValidator
 */
class BooleanValidator {

    /**
     * @param $boolean
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function true($boolean)
    {
        if(!is_bool($boolean))
            throw new \Exception('The parameter is not a boolean');
        if($boolean)
            return true;
        else
            return false;
    }

    /**
     * @param $boolean
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function false($boolean)
    {
        if(!is_bool($boolean))
            throw new \Exception('The parameter is not a boolean');
        if(!$boolean)
            return true;
        else
            return false;
    }

}