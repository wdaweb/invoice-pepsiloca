<?php include "./com/base.php"; 
$period=ceil(date("n")/2);

$monthStr=[
 '1'=>"1,2月",
 '2'=>"3,4月",
 '3'=>"5,6月",
 '4'=>"7,8月",
 '5'=>"9,10月",
 '6'=>"11,12月",
];

if(isset($_GET['period'])){
    $period=$_GET['period'];
}

$yaer=date("Y");
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>統一發票管理系統</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<?php include "./include/header.php";?>    



<a herf="add_invoice.php"><button>新增獎號</button>

<h1>期別</h1>
<ul class="nav">
<li><a href="invoice.php?period=1" style="background:<?=($period==1)?'pink':'white';?>">1(1,2)</a></li>
<li><a href="invoice.php?period=2" style="background:<?=($period==2)?'pink':'white';?>">2(3,4)</a></li>
<li><a href="invoice.php?period=3" style="background:<?=($period==3)?'pink':'white';?>">3(5,6)</a></li>
<li><a href="invoice.php?period=4" style="background:<?=($period==4)?'pink':'white';?>">4(7,8)</a></li>
<li><a href="invoice.php?period=5" style="background:<?=($period==5)?'pink':'white';?>">5(9,10)</a></li>
<li><a href="invoice.php?period=6" style="background:<?=($period==6)?'pink':'white';?>">6(11,12)</a></li>
</ul>



<?php


$num1=find('award_number',['period'=>$period,'year=>$year','type'=>1]);//單筆
$num2=find('award_number',['period'=>$period,'year=>$year','type'=>2]);//單筆
$num3=all('award_number',['period'=>$period,'year=>$year','type'=>3]);//多筆
$num4=all('award_number',['period'=>$period,'year=>$year','type'=>4]);//多筆

?>




<table class="invoice-table">
    <tr>
        <td>年月份</td>
        <td><?=$year;?><?=$monthStr[$period];?></td>
    </tr>
    <tr>
        <td>特別獎</td>
        <td><?php
        if(!empty($num1['number'])){
            echo $num1['number']; //判斷資料存在會印出 避免出現錯誤訊息
        }
        ?></td>
    </tr>
    <tr>
        <td>特獎</td>
        <td><?php
        if(!empty($num2['number'])){
            echo $num2['number']; 
        }
        ?></td>
    </tr>
    <tr>
        <td>頭獎</td>
        <td>
            <?php
            foreach($num3 as $num){
                echo $num['number']. "<br>";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>二獎</td>
        <td></td>
    </tr>
    <tr>
        <td>參獎</td>
        <td></td>
    </tr>
    <tr>
        <td>四獎</td>
        <td></td>
    </tr>
    <tr>
        <td>五獎</td>
        <td></td>
    </tr>
    <tr>
        <td>六獎</td>
        <td></td>
    </tr>
    <tr>
        <td>增開六獎</td>
        <td>
        <?php
            foreach($num4 as $num){
                echo $num['number']. "<br>";
            }
            ?>
        </td>
    </tr>
</table>
</body>
</html>