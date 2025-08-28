<?php

$servername = "dpg-d2o8of6mcj7s73baa990-a";
$username = "lab_e1x0_user";
$password = "Em7tocSuPyFi127HChLNV1HiU30pytNO";
$dbname = "lab_e1x0";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
