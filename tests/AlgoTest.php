<?php

use PHPUnit\Framework\TestCase;
use Assessment\Algo\Algo;

class AlgoTest extends TestCase
{
    /**
     * Get length of array.
     *
     * @return void
     */
    public function test_get_length_of_array()
    {
        $firstArray = [68168, 87954, 32158, 8774];
        $secondArray = [5408, 6604, 32158, 84984, 8774, 34871];

        $algo = new Algo($firstArray, $secondArray);

        $this->assertCount(4, $algo->getFirstArray());
        $this->assertCount(6, $algo->getSecondArray());
    }

    /**
     * Get value contain in array.
     *
     * @return void
     */
    public function test_get_value_contain_in_array()
    {
        $firstArray = [68168, 87954, 32158, 8774];
        $secondArray = [5408, 6604, 32158, 84984, 8774, 34871];

        $algo = new Algo($firstArray, $secondArray);

        $this->assertTrue(in_array(68168, $algo->getFirstArray()));
        $this->assertTrue(in_array(6604, $algo->getSecondArray()));
    }

    /**
     * Get intersection from two array.
     *
     * @return void
     */
    public function test_get_intersection_from_two_array()
    {
        $firstArray = [68168, 87954, 32158, 8774];
        $secondArray = [5408, 6604, 32158, 84984, 8774, 34871];

        $algo = new Algo($firstArray, $secondArray);

        $this->assertContains(32158, $algo->arrayIntersection());
        $this->assertContains(8774, $algo->arrayIntersection());
    }

    /**
     * Get smallest value in array.
     *
     * @return void
     */
    public function test_get_smallest_value_in_array()
    {
        $firstArray = [68168, 87954, 32158, 8774];
        $this->assertEquals(8774, min($firstArray));

        $secondArray = [5408, 6604, 32158, 84984, 8774, 34871];
        $this->assertEquals(5408, min($secondArray));
    }

    /**
     * Get second smallest value in array.
     *
     * @return void
     */
    public function test_get_smallest_second_value_in_array()
    {
        $secondArray = [5408, 6604, 32158, 84984, 8774, 34871];
        $algo = new Algo($secondArray);
        $this->assertEquals(6604, $algo->secondSmallest());

        $firstArray = [68168, 87954, 32158, 8774];
        $algo = new Algo($firstArray);
        $this->assertEquals(32158, $algo->secondSmallest());
    }

    /**
     * String contains Chinese character.
     *
     * @return void
     */
    public function test_string_contain_chinese_character()
    {
        $str = 'drinking giving jogging 喝 喝 passing 制图 giving 跑步 吃';

        $this->assertEquals(1, preg_match("/\p{Han}+/u", $str));
    }
}

