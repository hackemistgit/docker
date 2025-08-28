<?php
$host     = "dpg-d2o8of6mcj7s73baa990-a";   // Render internal hostname
$port     = "5432";                          // Postgres default port
$dbname   = "lab_e1x0";                      // Database name
$user     = "lab_e1x0_user";                 // Database user
$password = "Em7tocSuPyFi127HChLNV1HiU30pytNO"; // Database password

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

echo "✅ Connected successfully to PostgreSQL!";
?>
