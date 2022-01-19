<?php
require_once('vendor/autoload.php');

use Assessment\Algo\Algo;

class FindSecondSmallestNumber extends Algo
{
    /**
     * Return message.
     *
     * @return string
     */
    public function message()
    {
        echo "Return the second smallest number from array [5408, 6604, 32158, 84984, 8774, 34871]\n";
    }
}

$findSecondSmallestNumber = new FindSecondSmallestNumber([5408, 6604, 32158, 84984, 8774, 34871]);
$findSecondSmallestNumber->message();
echo $findSecondSmallestNumber->secondSmallest() . "\n";
