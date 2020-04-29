<h1>資料庫的連線</h1>
<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=students";
$pdo=new PDO($dsn,'root','');

$sql="select * from students where left(`class_num`,3)='102'";

/*
    PDO::FETCH_ASSOC
    PDO::FETCH_NUM
    PDO::FETCH_BOTH -> 預設值
*/
$rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
/* $rows=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
每執行一次fetch,就會往下一筆資料找
$rows=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC); */
/* $rows=$pdo->query($sql);
$row=$rows->fetch(PDO::FETCH_ASSOC);
$row=$rows->fetch(PDO::FETCH_ASSOC);
$row=$rows->fetch(PDO::FETCH_ASSOC); */

/* echo $row['name'];
echo "<hr>";
echo $rows['name'];
echo "<hr>";
echo $rows[1]['name'];
echo "<hr>";
echo $rows[1][3];
echo "<hr>";
echo "<pre>";
print_r($rows);
echo "</pre>";
 */

 ?>
 <style>
 table{
     border-collapse:collapse;
     border:1px solid #999;
     box-shadow:0 0 5px #ccc;
 }
 table td{
     padding:5px;
     border:1px solid #ccc;
 }
 table tr:nth-child(odd){
     background:lightgreen;
 }
 table tr:hover{
     background:lightyellow;
 }

 </style>
<table>
<?php
foreach($rows as $row){
    echo "<tr>";
    echo "    <td>".$row['uni_id']."</td>";
    echo "    <td>".$row['class_num']."</td>";
    echo "    <td>".$row['name']."</td>";
    echo "    <td>".$row['dept']."</td>";
    echo "    <td>".$row['nat_id']."</td>";
    echo "</tr>";
}
?>
</table>




?>