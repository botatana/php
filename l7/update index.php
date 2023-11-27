<?php

function generateRandomWord($minLength = 5, $maxLength = 10)
{
    $word = '';
    $wordLength = rand($minLength, $maxLength);
    for ($i = 0; $i < $wordLength; $i++) {
        $word .= chr(rand(97, 122)); 
    }
    return $word;
}

function generateRandomText($wordCount = 500)
{
    $words = [];
    for ($i = 0; $i < $wordCount; $i++) {
        $words[] = generateRandomWord();
        if (($i + 1) % 5 == 0 && $i < $wordCount - 1) {
            $words[] = ';';
        }
    }
    return implode(' ', $words);
}

function lineGenerator($text, $lineSeparator = ';', $limit = 25)
{
    $lines = explode($lineSeparator, $text);
    $lineCount = 0;

    foreach ($lines as $line) {
        $line = trim($line);

        yield $line . ';';

        $lineCount++;
        if ($lineCount >= $limit) {
            $lineCount = 0;
            yield ''; 
        }
    }
}

$randomWords = generateRandomText();

foreach (lineGenerator($randomWords) as $line) {
    echo $line . PHP_EOL;
}
?>
