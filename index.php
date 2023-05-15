<?php 

$dsn="mysql:host=localhost;charset=utf8;dbname=test"; 
$pdo=NEW PDO($dsn,'root',''); //PDO(連線資料,帳號,密碼,陣列（可不填))

// pdo 取資料
//query 查詢  fetch拿取
$sql="select * from `students`  limit 1";
$row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC); //關連式拿取

echo "<pre>";
print_r($row);
echo"</pre>";