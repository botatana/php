<?php

function getRandomWord($len = 5) {
    $word = array_merge(range('a', 'z'), range('A', 'Z'));
    shuffle($word);
    return substr(implode($word), 0, $len);
}

$sign = ';';

for ($i = 0; $i < 100; $i++) {
    
    echo getRandomWord();
    if (($i + 1) % 5 == 0) {
        echo $sign;
    }
    echo "\n";
    

}

?>

