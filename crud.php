<?php 

$dsn="mysql:host=localhost;charset=utf8;dbname=test"; 
$pdo=NEW PDO($dsn,'root',''); //PDO(連線資料,帳號,密碼,陣列（可不填))

// pdo 取資料
//query 查詢  fetch拿取
$sql="select * from `students` ";
$rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC); //陣列式拿取

// echo "<pre>";
// print_r($rows);
// echo"</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: 1px solid black;
            border-collapse: collapse;
            width: 70%;
            min-width: 800px;
        }
        td{
            border:1px solid lightblue;
            padding: 5px 8px;
        }
    </style>
</head>
<body>
    <h1>學生列表</h1>
    <a href="insert_form.php" class="btn">新增學生資料</a>
    <table>
        <tr>
            <td>id</td>
            <td>學號</td>
            <td>姓名</td>
            <td>出生年月日</td>
            <td>身份證字號</td>
            <td>住址</td>
            <td>家長</td>
            <td>電話</td>
            <td>科別</td>
            <td>畢業國中</td>
            <td>畢業狀態</td>
            <td>編輯</td>
            <td>刪除</td>
        </tr>

<?php
foreach($rows as $row){
?>
        <tr>
            <td><?=$row['id'];?></td>
            <td><?=$row['school_num'];?></td>
            <td><?=$row['name'];?></td>
            <td><?=$row['birthday'];?></td>
            <td><?=$row['uni_id'];?></td>
            <td><?=$row['addr'];?></td>
            <td><?=$row['parents'];?></td>
            <td><?=$row['tel'];?></td>
            <td><?=$row['dept'];?></td>
            <td><?=$row['graduate_at'];?></td>
            <td><?=$row['status_code'];?></td>
            <td><a href="edit_form.php?id=<?=$row['id'];?>">編輯</td>
            <td><a href="del.php?id=<?=$row['id'];?>">刪除</td>
        </tr>
<?php
}
?>
    </table>
    
</body>
</html>