<?php
require 'db.php';

// check injection 0x01
$tableName = "injection0x01";
$checkTable = "SELECT table_name 
               FROM information_schema.tables 
               WHERE table_schema='public' AND table_name='$tableName'";
$result = pg_query($conn, $checkTable);

if (!$result || pg_num_rows($result) == 0) {
    $errorMessage = "Error: Could not find $tableName table.";
}

// check injection 0x02
$tableName = "injection0x02";
$checkTable = "SELECT table_name 
               FROM information_schema.tables 
               WHERE table_schema='public' AND table_name='$tableName'";
$result = pg_query($conn, $checkTable);

if (!$result || pg_num_rows($result) == 0) {
    $errorMessage = "Error: Could not find $tableName table.";
}

// check injection 0x03 (uncomment if needed)
// $tableName = "injection0x03";
// $checkTable = "SELECT table_name 
//                FROM information_schema.tables 
//                WHERE table_schema='public' AND table_name='$tableName'";
// $result = pg_query($conn, $checkTable);

// if (!$result || pg_num_rows($result) == 0) {
//     $errorMessage = "Error: Could not find $tableName table.";
// }
?>
