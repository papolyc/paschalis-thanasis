
<?php

$user = 'root';
$pass = '';

$db ='e-shop'; 

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

echo "Great work";

?>﻿
