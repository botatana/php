<?php

$inputData = "Мой номер #телефон# ";
$phoneMask = "+7 (9xx) xxx-xx-xx ";
echo $inputData; 

 

 $a = preg_replace_callback('/x/', fn() =>  rand(1,9)
 , $phoneMask);
echo $a;
  
echo str_replace("#телефон#",$a,$inputData) 



?>

