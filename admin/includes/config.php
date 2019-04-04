<?php
$dbhost = 'cis282store.cnhmyvnsbqbb.us-east-1.rds.amazonaws.com';
$dbuser = 'sobczykstore';
$dbpass = '!Volospheonix1998';
$dbname = 'cis282store';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn )
{
    die('Could not connect to instance: ' . mysqli_error($conn));
}

?>