<?php
$dbhost = 'cis282store.cnhmyvnsbqbb.us-east-1.rds.amazonaws.com';
$dbuser = 'sobczykstore';
$dbpass = '!Volospheonix1998';
$dbname = 'cis282store';
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($mysqli->error);