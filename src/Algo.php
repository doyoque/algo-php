<?php
/**
 * Author: Abiyoga Bayu Primadi
 * Email: abiyoga1335@gmail.com
 * Receiver: lawrence.low@webimp.com.sg
 * Deadline: 6PM SGT time
 */

namespace Assessment\Algo;

class Algo
{
    public function __construct(
        /**
         * @var array $firstArray
         * @var array $secondArray
         */
        public array $firstArray = [],
        public array $secondArray = [],
    ) {
    }

    /**
     * Get first array
     *
     * @return array
     */
    public function getFirstArray()
    {
        return $this->firstArray;
    }

    /**
     * Get second array
     *
     * @return array
     */
    public function getSecondArray()
    {
        return $this->secondArray;
    }

    /**
     * Array intersection.
     *
     * @return array[]
     */
    public function arrayIntersection()
    {
        $result = [];
        foreach($this->getFirstArray() as $val) {
            if (in_array($val, $this->getSecondArray())) {
                $result[] = $val;
            }
        }

        return $result;
    }

    /**
     * Find second smallest value.
     *
     * @return number
     */
    public function secondSmallest()
    {
        $INT_MAX = 2147483647;
        $first = $second = $INT_MAX;

        for ($i = 0; $i < count($this->getFirstArray()); $i++) {
            if ($this->getFirstArray()[$i] < $first) {
                $second = $first;
                $first = $this->getFirstArray()[$i];
            } else if ($this->getFirstArray()[$i] < $second && $this->getFirstArray()[$i] != $first) {
                $second = $this->getFirstArray()[$i];
            }
        }

        return $second;
    }
}
