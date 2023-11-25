<?php

function generateRandomWords($count = 500)
{
    $words = [];
    for ($i = 0; $i < $count; $i++) {
        $word = '';
        $wordLength = rand(5, 10);
        for ($j = 0; $j < $wordLength; $j++) {
            $word .= chr(rand(97, 122)); 
        }
        $words[] = $word;
    }
    return implode(' ', $words);
}

$randomWords = generateRandomWords();

function lineGenerator($text, $lineSeparator = ';', $limit = 25)
{
    $lines = explode($lineSeparator, $text);
    $lineCount = 0;

    foreach ($lines as $line) {
        yield $line;

        $lineCount++;
        if ($lineCount >= $limit) {
            break;
        }
    }
}

foreach (lineGenerator($randomWords) as $line) {
    echo $line . PHP_EOL;
    echo memory_get_usage() . "\n";
}

?>