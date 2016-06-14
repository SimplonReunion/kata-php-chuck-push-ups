<?php

require 'kata.php';

class KataTest extends \PHPUnit_Framework_TestCase
{
    public function testWordBetweenCount()
    {
        $this->assertEquals(6, chuckPushUps('1 "Chuck" 10 "Stop that!" 11 "Your vest looks stupid" 100 101 110'));
        $this->assertEquals(11, chuckPushUps('1000 "Did you kick someone in the face today?" 1001 1010 "Will I be making dinner then?!" 1011'));
    }

    public function testReverseCount()
    {
        $this->markTestSkipped();
        $this->assertEquals(16, chuckPushUps('10000 "Nice Beard" 1111 "Are you wearing denim shorts?" 1110 1101'));
    }

    public function testEmptyStringProvided()
    {
        $this->markTestSkipped();
        $this->assertEquals('FAIL!!', chuckPushUps(''));
    }

    public function testArrayProvided()
    {
        $this->markTestSkipped();
        $this->assertEquals('FAIL!!', chuckPushUps([]));
    }

    public function testNumberProvided()
    {
        $this->markTestSkipped();
        $this->assertEquals('FAIL!!', chuckPushUps(1));
    }

    public function testCharactersBetweenDigit()
    {
        $this->markTestSkipped();
        $this->assertEquals(3244, chuckPushUps('1ee1gf00t10h1011tr00'));
    }
}
