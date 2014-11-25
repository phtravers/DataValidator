<?php
/**
 * Created by JetBrains PhpStorm.
 * User: philippetraversac
 * Date: 24/11/2014
 * Time: 18:17
 * To change this template use File | Settings | File Templates.
 */

namespace Tests\OKLM\DataValidator;

use \OKLM\DataValidator\Pair;

class PairTest  extends \PHPUnit_Framework_TestCase{

    public function testIsPairWithPair(){
        $this->assertEquals(true, Pair::isPair(2));
        $this->assertEquals(true, Pair::isPair(4));
        $this->assertEquals(true, Pair::isPair(6));
    }

    public function testIsPairWithNotPair(){
        $this->assertEquals(false, Pair::isPair(9));
        $this->assertEquals(false, Pair::isPair(1));
        $this->assertEquals(false, Pair::isPair(17));
    }
}