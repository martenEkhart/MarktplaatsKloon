<?php 
//
//$servername = "localhost";
//$dBUsername = "lootgames_nl_test";
//$dBPassword = "NxmwUPTNzBzm";
//$dBName = "lootgames_nl_test";


$servername = "127.0.0.1";
$username = "root";
$password = "codegorilla";
$dbname = "article";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}