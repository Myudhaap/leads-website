<?php

namespace leadsWeb\config;

use mysqli;

$host = 'localhost';
$db = 'db_leads';
$user = 'root';
$pass = 'root';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}