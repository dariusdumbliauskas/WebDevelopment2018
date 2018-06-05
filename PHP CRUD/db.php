<?php 
$dsn = 'mysql:host=localhost;dbname=Auto';
$username = 'root';
$password = 'mysql';
$options = [];
$connection = new PDO($dsn, $username, $password, $options);
