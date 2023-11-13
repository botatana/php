 <!-- Первый одномерный -->
 
 <?php
$numbers = [];

for ($i = 0; $i < 10; $i++) {
    $numbers[$i] = mt_rand(0, 100);
}

var_dump ($numbers); 
?>

<!-- Второй многомерный-->
<?php
$array = [
    'A' => [], mt_rand(0, 100),
    'B' => [], mt_rand(0, 100),
    'C' => [], mt_rand(0, 100),
    'F' => [], mt_rand(0, 100),
    'G' => [], mt_rand(0, 100),
    'H' => [], mt_rand(0, 100),
    'I' => [], mt_rand(0, 100),
    'J' => [], mt_rand(0, 100),
    'K' => [], mt_rand(0, 100),
    'L' => [], mt_rand(0, 100),
    'M' => [], mt_rand(0, 100),
    'N' => [], mt_rand(0, 100),
    'O' => [], mt_rand(0, 100),
];



var_dump($array);
?> 

<!-- //Объединяем массивы -->

<?php


$numbers = [];

for ($i = 0; $i < 10; $i++) {
    $numbers[$i] = mt_rand(0, 100);
}


$array = [
	'A' => [], mt_rand(0, 100),
    'B' => [], mt_rand(0, 100),
    'C' => [], mt_rand(0, 100),
    'F' => [], mt_rand(0, 100),
    'G' => [], mt_rand(0, 100),
    'H' => [], mt_rand(0, 100),
    'I' => [], mt_rand(0, 100),
    'J' => [], mt_rand(0, 100),
    'K' => [], mt_rand(0, 100),
    'L' => [], mt_rand(0, 100),
    'M' => [], mt_rand(0, 100),
    'N' => [], mt_rand(0, 100),
    'O' => [], mt_rand(0, 100),
];


$mix = array_merge($numbers, $array);

echo '<pre>';
var_dump($mix);
echo '</pre>';


?>