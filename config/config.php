<?php
$servername = "db.fr-pari1.bengt.wasmernet.com";
$port = "10272";
$username = "59895bc873858000216ecd8c794d";
$password = "06915989-5bc8-7520-8000-7d1cb07beccf";
$dbname = "ibem_db";

$conn = new mysqli($servername, $username, $password, $dbname, port: $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
