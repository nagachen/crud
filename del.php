<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=test";
$pdo=new PDO($dsn,'root','');

$sql="delete from students where `id`='{$_GET['id']}'";

//exec 會回傳影響了幾筆資料
$pdo->exec($sql);
header("location:crud.php");