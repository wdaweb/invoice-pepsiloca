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
    <?php
    
    // 計算月份轉為期
    $period=ceil(date("n")/2);
    // echo $period;
    if(isset($_GET['period'])){
        $period=$_GET['period'];
    }
    
    
    ?>
    
    <div class="container text-light col-10 col-md-6 p-3 my-5">
        <h3 class="text-center pb-3">發票列表</h3>        
    <?php include "./include/header.php";?>
<ul class="nav m-3">
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
<table class="table table-sm mt-2">
    <tr style="color:gray">
        <td>年份</td>
        <td>期別</td>
        <td>號碼</td>
        <td>花費</td>
        <td>操作</td>
  
    </tr>
    <?php
    foreach($rows as $row){
        $p=$row['period'];
        // echo "<a href='del_invoice.php?user=".$row['id']."'><button>刪除</button></a>";
    ?>
    <tr class="tt">
        
        <td class="hov"><?=$row['year'];?></td>
        <td class="hov">第<?=$p;?>期(<?=(2*$p-1)."/".(2*$p) ?>月)</td>
        <td class="hov"><?=$row['code']."-".$row['number'];?></td>
        <td class="hov"><?=$row['expend']."元";?></td>
        <td>          
        <a class="btn btn-primary btn-sm" href="edit_invoice.php?id=<?=$row['id'];?>&period=<?=$p;?>" role="button">編輯</a>  
        <a class="btn btn-primary btn-sm" href="del_invoice.php?id=<?=$row['id'];?>&period=<?=$p;?>" role="button">刪除</a>  
        </td>
    </tr>
    <?php
    }
    ?>
 
</table>

</div>







</body>
</html>
