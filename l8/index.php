<?php

$lines = file('names.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$lastLine = end($lines);

$files = glob('./uploads/*');

$lastDownloadedFile = end($files);

$htmlContent = "<p>{$lastLine}</p>";
$htmlContent .= "<img src='{$lastDownloadedFile}' alt='последний файл'>";

echo $htmlContent;

?>
<html>
<head>
<meta charset="utf-8">
<title>form</title>
</head>

<body>
<h2>Single upload</h2>
<form method="post" action="upload.php" enctype="multipart/form-data">
    <input type="file" name="image">
	<p><input name="name"  placeholder="Имя"/></p>
   <p><input name="surname" placeholder="Фамилия"/></p>
    <p><input name="otv" placeholder="Отчество"/></p>
    <button type="submit">Upload</button>
</form>

<style>
    * {
        font-size: 26px;
    }
    input, button {
        display: block;
        margin-bottom: 10px;
    }
</style>

</body>
</html>
