<?php
$servidor = "DESKTOP-D2SSE1C\SQLEXPRESS";
$database = "farmacia2";
$info = array('Database'=>$database);
$cn = sqlsrv_connect($servidor, $info);
$connectionInfo = array( 'UID'=>$uid,''=>$pwd,'Database'=>$databaseName);



$conn = sqlsrv_connect($serverName,$connectionInfo);


if($conn){echo ''; }else{echo 'Connection failure<br />';die(print_r(sqlsrv_errors(),TRUE));}


?>
