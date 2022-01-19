#!/bin/bash

declare options=$@
declare optionsArr=($options)

if [[ "${optionsArr[0]}" == "find-common-number"  ]]
then
    php example/FindCommonNumbers.php
fi

if [[ "${optionsArr[0]}" == "find-second-smallest"  ]]
then
    php example/FindSecondSmallestNumber.php
fi

if [[ "${optionsArr[0]}" == "highlight-chinese-char"  ]]
then
    php example/HighlightChineseCharacters.php
fi

