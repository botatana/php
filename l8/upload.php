<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$otv = $_POST['otv'];
$file = fopen("names.txt","at");
fwrite($file,"\n $name:$surname:$otv \n");
fclose($file);
?>
<?php
$image = $_FILES["image"];


$types = ["image/jpeg", "image/png"];

if (!in_array($image["type"], $types)) {
    die('Incorrect file type');
}

$fileSize = $image["size"] / 1000000;
$maxSize = 1;

if ($fileSize > $maxSize) {
    die('Incorrect file size');
}

if (!is_dir('../uploads')) {
    mkdir('../uploads', 0777, true);
}

$extension = pathinfo($image["name"], PATHINFO_EXTENSION);
$fileName = time() . ".$extension";

if (!move_uploaded_file($image["tmp_name"], "../uploads/" . $fileName)) {
    die('Error upload file');
}


?>