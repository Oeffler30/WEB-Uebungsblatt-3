<?php
$name = $_GET["name"];
$email = $_GET["email"];
$nachricht = $_GET["nachricht"];

$file = fopen("data.csv","w");
if($file)
{
	fputcsv($file, array($name, $email, $nachricht), ";");
	fclose($file);
}
header("location:dataform.php");
?>