<?php
/**
 * Created by JetBrains PhpStorm.
 * User: philippetraversac
 * Date: 24/11/2014
 * Time: 18:09
 * To change this template use File | Settings | File Templates.
 */

namespace OKLM\DataValidator;


class Pair {

    public static function isPair($nb)
    {
        return $nb % 2 == 0;
    }

}