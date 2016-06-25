<?php
include "connection.php";
include "smsGateway.php";
$smsGateway = new SmsGateway('email', 'password');

$deviceID = 22046;
//$number = '+628988918895';
//$numbers = ['+628988918895', '+6287787385276', '+6283822427100'];
//$numbers = ['+628988918895', '+6283822427100', '+627787385276'];
$message = 'Hello World!';

//$numbers=array();
//	array_push($numbers,"+627787385276","+627787385276","+627787385276","+627787385276");
	
	//print_r ($numbers);

//print_r ($numbers);

$query = "SELECT item2 FROM pendaftar";

$aaa = array();

if ($result = mysqli_query($link, $query)) {

    /* fetch associative array */
    while ($row = mysqli_fetch_assoc($result)) {
        //printf ("%s\n", $row["item2"]);
        array_push($aaa, '+62'.$row["item2"]);
    }

    /* free result set */
    mysqli_free_result($result);
}

//print_r($aaa);

echo md5("smsKMNU");

/* close connection */
mysqli_close($link);

//Please note options is no required and can be left out
//$result = $smsGateway->sendMessageToManyNumbers($aaa, $message, $deviceID);
?>
