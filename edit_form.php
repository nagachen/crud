<?php
    $dsn="mysql:host=localhost;charset=utf8;dbname=test";
    $pdo=new PDO($dsn,'root','');
    $sql="select * from `students` where `id`= '{$_GET['id']}'";
    $rwo=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>ID:<?=$rwo['id'];?></h3>
    <form action="edit.php" method="post">
    <!-- 需要送ID，但不希望修改,所以隱藏了 -->
    <div><input type="hidden" name="id" value="<?=$rwo['id'];?>"></div> 
    <div><label for="">學號:</label><input type="text" name="school_num" value="<?=$rwo['school_num'];?>"></div>
    <div><label for="">姓名:</label><input type="text" name="name" value="<?=$rwo['name'];?>"></div>
    <div><label for="">出生年月日:</label><input type="text" name="birthday" value="<?=$rwo['birthday'];?>"></div>
    <div><label for="">身份證字號:</label><input type="text" name="uni_id" value="<?=$rwo['uni_id'];?>"></div>
    <div><label for="">住址:</label><input type="text" name="addr" value="<?=$rwo['addr'];?>"></div>
    <div><label for="">家長:</label><input type="text" name="parents" value="<?=$rwo['parents'];?>"></div>
    <div><label for="">電話:</label><input type="text" name="tel" value="<?=$rwo['tel'];?>"></div>
    <div><label for="">科別:</label><input type="text" name="dept" value="<?=$rwo['dept'];?>"></div>
    <div><label for="">畢業國中:</label><input type="text" name="graduate_at" value="<?=$rwo['graduate_at'];?>"></div>
    <div><label for="">畢業狀態:</label><input type="text" name="status_code" value="<?=$rwo['status_code'];?>"></div>
    <div><input type="submit" value="送出"><input type="reset"></div>
    </form>
</body>
</html>