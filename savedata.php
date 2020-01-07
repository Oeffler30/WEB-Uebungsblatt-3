<?php
$name = $_GET["name"];
$email = $_GET["email"];
$nachricht = $_GET["nachricht"];

$absolute_path = 'D:\\Kontaktdaten\\data.csv';

//$file = fopen("data.csv","a");
$file = fopen($absolute_path, "a");
if($file) {
	fputcsv($file, array($name, $email, $nachricht), ";");
	fclose($file);
}
header("location:kontakt.php");
?>