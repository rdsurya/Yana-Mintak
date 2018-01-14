<?php
$servername = "localhost";
$username = "root";
$password = ""; //kalau ada password, letak sini
$dbname = "emintak"; // tukar jadi ikut keperluan


// Create connection
$link = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

?>