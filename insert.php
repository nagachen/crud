<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=test";
$pdo=new PDO($dsn,'root','');
$sql="INSERT INTO `students`(`school_num`, `name`, `birthday`, `uni_id`, `addr`, `parents`, `tel`, `dept`, `graduate_at`, `status_code`) 
                     VALUES ('{$_POST['school_num']}','{$_POST['name']}','{$_POST['birthday']}','{$_POST['uni_id']}','{$_POST['addr']}','{$_POST['parents']}','{$_POST['tel']}','{$_POST['dept']}','{$_POST['graduate_at']}','{$_POST['status_code']}')";
$pdo->exec($sql);
header("location:crud.php");
?>