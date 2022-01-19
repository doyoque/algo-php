<?php
/**
 * Author: Abiyoga Bayu Primadi
 */

namespace Assessment\Algo;

class Algo
{
    /**
     * @var string $REDCOLOR
     */
    private $REDCOLOR = "\033[01;31m";

    /**
     * @var string $ENDCOLOR
     */
    private $ENDCOLOR = "\033[0m";

    /**
     * @var string $PREGMATCH
     */
    private $PREGMATCH = "/\p{Han}+/u";

    /**
     * @var integer $INT_MAX
     */
    private $INT_MAX = 2147483647;

    /**
     * @var array[] $firstArray
     * @var array[] $secondArray
     */
    public function __construct(
        public array $firstArray = [],
        public array $secondArray = [],
        public string $strData = 'drinking giving jogging 喝 喝 passing 制图 giving 跑步 吃',
    ) {
    }

    /**
     * Get first array
     *
     * @return array[]
     */
    public function getFirstArray()
    {
        return $this->firstArray;
    }

    /**
     * Get second array
     *
     * @return array[]
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
     * @return integer
     */
    public function secondSmallest()
    {
        $first = $second = $this->INT_MAX;

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

    /**
     * Turn chinese character to red.
     *
     * @return string
     */
    public function getChineseCharacter()
    {
        $strArray = explode(" ", $this->strData);

        foreach($strArray as $i => $data) {
            if (preg_match($this->PREGMATCH, $data)) {
                $strArray[$i] = $this->REDCOLOR . $data . $this->ENDCOLOR;
            }
        }

        return implode(" ", $strArray);
    }
}
