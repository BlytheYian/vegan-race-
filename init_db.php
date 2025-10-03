<?php
$host = '127.0.0.1';
$user = 'root';
$pass = '';
$dbname = 'veganrace';

$pdo = new PDO("mysql:host=$host", $user, $pass);
$pdo->exec("CREATE DATABASE IF NOT EXISTS `$dbname` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci");
echo "資料庫建立完成\n";