<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="title" content="Agriweb">
	<meta name="Agriweb" content="Agriweb ID, Agriweb IPB, Komunitas Web Development, Ilmu Komputer IPB, Komunitas ilmu komputer">
	<meta name="description" content="Komunitas Web Development Ilmu Komputer IPB">
	<meta name="abstract" content="Komunitas Web Development Ilmu Komputer IPB">
	
	<meta name="author" content="ivan maulana">
	<meta name="publisher" content="agri.web.id">
	<meta name="copyright" content="agri.web.id">
	<link rel="shortcut icon" href="assets/img/favicon.png">
	
	<title>Aplikasi SMS KMNU</title>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
	
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
	
	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
	<style>		
		.center {
		  position: absolute;
		  top: 35%;
		  left:50%;
		  transform: translateY(-35%);
		  transform: translateX(-50%);
		}
    	
    	</style>
    
</head>
<?php

include "connection.php";
include "smsGateway.php";

$sql = "SELECT user, pass FROM data";
$result = mysqli_query($link, $sql);

$row = mysqli_fetch_assoc($result);
$user = $row['user'];
$pass = $row['pass'];

$username = $_POST["username"];
$password = $_POST["password"];
$isi = $_POST["isi"];

if ($user === $username && $pass === md5($password)){
	
	$numbers = null;
	$numbers = array();
	$count = 0;
	
	if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
		$deleterecords = "TRUNCATE TABLE pendaftar"; 
		mysqli_query($link, $deleterecords);
		
		//Import uploaded file to Database
		$handle = fopen($_FILES['filename']['tmp_name'], "r");
	
		while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			$data0 = mysqli_escape_string($link, $data[0]);
			$data1 = mysqli_escape_string($link, $data[1]);
			$data2 = mysqli_escape_string($link, $data[2]);
			$data3 = mysqli_escape_string($link, $data[3]);
			$data4 = mysqli_escape_string($link, $data[4]);
			$data5 = mysqli_escape_string($link, $data[5]);
			$data6 = mysqli_escape_string($link, $data[6]);
			$data7 = mysqli_escape_string($link, $data[7]);
			$data8 = mysqli_escape_string($link, $data[8]);
			array_push($numbers, '+62'.$data7);
		        $count++;
		        $no = '+62'.$data7;
		        
			$import="INSERT into pendaftar(nama, no) values('$data1','$no')";
	
			mysqli_query($link,$import) or die(mysqli_error());
		}
	
		fclose($handle);
	}
	
	else {
		$query = "SELECT no FROM pendaftar";
		$result = mysqli_query($link, $query);
		
		/* associative array */
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
			array_push($numbers, '+62'.$row['no']);
			$count++;
		}
	
	}
	
	print_r ($numbers);

	// account smsgateway
	$smsGateway = new SmsGateway('email', 'password');
	$deviceID = 22046;
	
	$message = $isi;
	
	/* close connection */
	mysqli_close($link);
	
	//$result = $smsGateway->sendMessageToManyNumbers($numbers, $message, $deviceID);
	
	echo '
  <div class="center text-center">
    <h4>
    	Berhasil, SMS Akan Dikirim ke '.$count.' Penerima.
    </h4>
    <p>*Silahkan tunggu dan perhatikan SMS dikirimkan oleh HP kamu</p>
    <a href="index.php" class="waves-effect waves-light btn-large">Halaman Utama</a>
  </div>';
}
else die();
?>

<body>

</body>
</html>
