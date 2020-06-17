<?php
include_once "com/base.php";
$id=$_GET['id'];
$period=$_GET['period'];

del('invoice',$id);
// $sql = "DELETE from invoice WHERE id=$id";

// $res = $pdo->exec($sql);
header ("location:list.php?period=$period");







// $id=$_GET["id"];

// $table='invoice';

// $res=del($table,$id);


// if ($res>0){
//     //刪除成功
//     to(list.php);
// }esle{
//     echo "刪除失敗";
// }



?>