<?php
$servername = "db.fr-pari1.bengt.wasmernet.com";
$port = "10272";
$username = "68eb28337e02800042f6cf96fc53";
$password = "069168eb-2834-709b-8000-4ba9cc27c819";
$dbname = "ibem_db2";

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
