<?php
$host = "db.fr-pari1.bengt.wasmernet.com";
$port ="10272";
$user = "68eb28337e02800042f6cf96fc53";
$pass = "069168eb-2834-709b-8000-4ba9cc27c819";
$db = "ibem_db2";

$conn = new mysqli($host, $user, $pass, $db , $port);
if ($conn->connect_error) {
    die("Failed to connect DB: " . $conn->connect_error);
}


?>
