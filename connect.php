<?php
$host = 'localhost';
$db = 'sirf_db';
$user = 'sirf';
$pass = 'sirf';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
