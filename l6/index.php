<?php
$inputData = '+7(912)345-67-89'; 
$regexp = '/^[+]7|8[0-9()-]{10}$\\s/'; 

echo "Мой номер " . $inputData; 


if (preg_match($regexp, $inputData)) { 
echo "\n". $inputData; 
} else { 
echo "Ошибка"; 
}
?>