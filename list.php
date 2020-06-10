<?php include "./com/base.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>統一發票管理系統</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="plugins/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/custom.css">
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&family=Open+Sans&display=swap" rel="stylesheet">


  <script src="plugins/jquery-3.5.1.min.js"></script>
  <script src="plugins/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/d788500399.js" crossorigin="anonymous"></script>




</head>
<body>
<?php include "./include/header.php";

// 計算月份轉為期
$period=ceil(date("n")/2);
// echo $period;
if(isset($_GET['period'])){
    $period=$_GET['period'];
}


?>

<div class="container border border-light rounded-lg bg-dark text-light col-10 col-md-6 p-3 my-5">
<h3 class="text-center pb-3">發票列表</h3>
<ul class="nav">
<li><a href="list.php?period=1" style="background:<?=($period==1)?>">第1期(1/2月)</a></li>
<li><a href="list.php?period=2" style="background:<?=($period==2)?>">第2期(3/4月)</a></li>
<li><a href="list.php?period=3" style="background:<?=($period==3)?>">第3期(5/6月)</a></li>
<li><a href="list.php?period=4" style="background:<?=($period==4)?>">第4期(7/8月)</a></li>
<li><a href="list.php?period=5" style="background:<?=($period==5)?>">第5期(9/10月)</a></li>
<li><a href="list.php?period=6" style="background:<?=($period==6)?>">第6期(11/12月)</a></li>
</ul>


<?php

//$sql="select * from invoice where period='$period'";
$rows=all('invoice',['period'=>$period]);

?>
<table class="table table-sm mt-2 ">
    <tr>
        <td>編號</td>
        <td>標記</td>
        <td>號碼</td>
        <td>花費</td>
    </tr>
    <?php
    foreach($rows as $row){
    ?>
    <tr>
        <td><?=$row['id'];?></td>
        <td><?=$row['code'];?></td>
        <td><?=$row['number'];?></td>
        <td><?=$row['expend'];?></td>
    </tr>
    <?php
    }
    ?>
</table>

</div>
</body>
</html>