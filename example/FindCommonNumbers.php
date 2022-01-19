<?php
require_once('vendor/autoload.php');

use Assessment\Algo\Algo;

class FindCommonNumbers extends Algo
{
    /**
     * Return message.
     *
     * @return string
     */
    public function message()
    {
        echo "Return common value from [68168, 87954, 32158, 8774] and [5408, 6604, 32158, 84984, 8774, 34871]\n";
    }
}

$findCommonNumbers = new FindCommonNumbers([68168, 87954, 32158, 8774], [5408, 6604, 32158, 84984, 8774, 34871]);
$findCommonNumbers->message();
print_r($findCommonNumbers->arrayIntersection());

