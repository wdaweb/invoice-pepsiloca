<?php include_once "./com/base.php";
$period=ceil(date("n")/2);

$monthStr=[
    '1'=>"1-2月",
    '2'=>"3-4月",
    '3'=>"5-6月",
    '4'=>"7-8月",
    '5'=>"9-10月",
    '6'=>"11-12月",
];

if(isset($_GET['period'])){
    $period=$_GET['period'];
}
$year=date("Y");
?>
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
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&display=swap" rel="stylesheet">

    <script src="plugins/jquery-3.5.1.min.js"></script>
    <script src="plugins/bootstrap.bundle.min.js"></script>





</head>

<body>
    <?php include "./include/header.php";?>

    <div class="container text-center text-light col-10 col-md-6 p-3 my-5 upnav">
        <div class="d-flex justify-content-center">
            <h3 class="pb-3">期別</h3>
            <hr>
        </div>
        <div class="inline-block justify-content-center">
            <ul class="nav">
                <li><a href="invoice.php?period=1" style="background:<?=($period==1)?>">第1期(1-2月)</a></li>
                <li><a href="invoice.php?period=2" style="color:white background:<?=($period==2)?>">第2期(3-4月)</a></li>
                <li><a href="invoice.php?period=3" style="background:<?=($period==3)?>">第3期(5-6月)</a></li>
                <li><a href="invoice.php?period=4" style="background:<?=($period==4)?>">第4期(7-8月)</a></li>
                <li><a href="invoice.php?period=5" style="background:<?=($period==5)?>">第5期(9-10月)</a></li>
                <li><a href="invoice.php?period=6" style="background:<?=($period==6)?>">第6期(11-12月)</a></li>
            </ul>
        </div>
        <?php

$num1=find('award_number',['period'=>$period,'year'=>$year,'type'=>1]); //單筆
$num2=find('award_number',['period'=>$period,'year'=>$year,'type'=>2]);//單筆
$num3=all('award_number',['period'=>$period,'year'=>$year,'type'=>3]);//多筆
$num4=all('award_number',['period'=>$period,'year'=>$year,'type'=>4]);//多筆

?>


<table class="table table-sm text-dark my-3">
    <tr>
        <td>年月份</td>
        <td class="font"><?=$year;?>年 <?=$monthStr[$period];?></td>
        <td></td>
    </tr>
    <tr>
        <td>特別獎</td>
        <td class="font"><?php
        if(!empty($num1['number'])){
            echo $num1['number'];
        };
        
        ?></td>
                <td><a class="wa" href="award.php?aw=1&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
            </tr>
            <tr>
                <td>特獎</td>
                <td class="font"><?php
        if(!empty($num2['number'])){
            echo $num2['number'];
        };
        
        ?></td>
                <td><a class="wa" href="award.php?aw=2&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
            </tr>
            <tr>
                <td>頭獎</td>
                <td class="font">
                    <?php
                foreach($num3 as $num){
                    echo $num['number'] . "<br>";
                }
                
                ?>

</td>
<td><a class="wa" href="award.php?aw=3&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
</tr>
<tr>
    <td>二獎</td>
    <td class="fonta">同期統一發票收執聯末7 位數號碼與頭獎中獎號碼末7 位相同者各得獎金4萬元</td>
    <td><a class="wa" href="award.php?aw=4&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
</tr>
<tr>
    <td>三獎</td>
    <td class="fonta">同期統一發票收執聯末6 位數號碼與頭獎中獎號碼末6 位相同者各得獎金1萬元</td>
    <td><a class="wa" href="award.php?aw=5&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
</tr>
<tr>
    <td>四獎</td>
    <td class="fonta">同期統一發票收執聯末5 位數號碼與頭獎中獎號碼末5 位相同者各得獎金4千元</td>
    <td><a class="wa" href="award.php?aw=6&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
</tr>
            <tr>
                <td>五獎</td>
                <td class="fonta">同期統一發票收執聯末4 位數號碼與頭獎中獎號碼末4 位相同者各得獎金1千元</td>
                <td><a class="wa" href="award.php?aw=7&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
            </tr>
            <tr>
                <td>六獎</td>
                <td class="fonta">同期統一發票收執聯末3 位數號碼與 頭獎中獎號碼末3 位相同者各得獎金2百元</td>
                <td><a class="wa" href="award.php?aw=8&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
            </tr>
            <tr>
                <td>增開六獎</td>
                <td class="font">
                    <?php
                        foreach($num4 as $num){
                            echo $num['number'] . "<br>";
                        }
                        
                        ?>
                </td>
                <td><a class="wa" href="award.php?aw=9&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
            </tr>
        </table>
        <a href="add_invoice.php"><button class="btn btn-primary ml-5">新增獎號</button></a>
    </div>
</body>

</html>