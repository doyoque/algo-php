<?php
require_once('vendor/autoload.php');

use Assessment\Algo\Algo;

class HighlightChineseCharacters extends Algo
{
    /**
     * Return message.
     *
     * @return string
     */
    public function message()
    {
        echo "Highlight all the Chinese characters in red and return the string.\n";
        echo "Example: 'drinking giving jogging 喝 喝 passing 制图 giving 跑步 吃'\n\n";
    }
}

$highlightChineseCharacters = new HighlightChineseCharacters();
$highlightChineseCharacters->message();
echo $highlightChineseCharacters->getChineseCharacter() . "\n";
