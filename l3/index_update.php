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

$a = range('a','o');
$b = array(mt_rand(0, 100), mt_rand(0, 100), mt_rand(0, 100),mt_rand(0, 100), mt_rand(0, 100), mt_rand(0, 100),mt_rand(0, 100), mt_rand(0, 100), mt_rand(0, 100),mt_rand(0, 100), mt_rand(0, 100), mt_rand(0, 100),mt_rand(0, 100), mt_rand(0, 100), mt_rand(0, 100));
$c = array_combine($a, $b);

var_dump($c);
?>





<!-- //Объединяем массивы -->

<?php





$mix = array_merge($numbers, $c);

echo '<pre>';
var_dump($mix);
echo '</pre>';


?>