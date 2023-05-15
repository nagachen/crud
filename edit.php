<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=test";
$pdo=new PDO($dsn,'root','');
$sql="UPDATE `students` 
    SET `school_num`='{$_POST['school_num']}',`name`='{$_POST['name']}',`birthday`='{$_POST['birthday']}',`uni_id`='{$_POST['uni_id']}',`addr`='{$_POST['addr']}',`parents`='{$_POST['parents']}',`tel`='{$_POST['tel']}',`dept`='{$_POST['dept']}',`graduate_at`='{$_POST['graduate_at']}',`status_code`='{$_POST['status_code']}' 
    WHERE `id`='{$_POST['id']}'";
$pdo->exec($sql);
header('location:crud.php');


?>