<?php
$link = mysqli_connect("localhost", "root", "root", "sms") or die("Could not connect.");

if(!$link) 

	die("no db");

if(!mysqli_select_db($link,"kmnuorid_sms"))

 	die("No database selected.");
?>
