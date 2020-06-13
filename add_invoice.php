<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增開獎獎號</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="plugins/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/custom.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
     <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&family=Open+Sans&display=swap" rel="stylesheet">


    <script src="plugins/jquery-3.5.1.min.js"></script>
     <script src="plugins/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php include "./include/header.php";?>
<div class="addbox container text-center text-light col-10 col-md-6 p-3 my-5 ">
<h3 class="text-center pb-3">中獎號碼輸入</h3>
<hr>
<form  action="save_number.php" method="post">
<table class="invoice-table text-light my-3 ">
    <tr>
        <td>年月份</td>
        <td>
            <input type="number" name="year" id="">
            <select name="period">
                <option value="1">1,2月</option>
                <option value="2">3,4月</option>
                <option value="3">5,6月</option>
                <option value="4">7,8月</option>
                <option value="5">9,10月</option>
                <option value="6">11,12月</option>

            </select>

        </td>
    </tr>
    <tr>
        <td>特別獎</td>
        <td><input type="number" name="num1"><br>同期統一發票收執聯8位數號碼與特別獎號碼相同者獎金1,000萬元</td>
    </tr>
    <tr>
        <td>特獎</td>
        <td><input type="number" name="num2"></td>
    </tr>
    <tr>
        <td>頭獎</td>
        <td>
            <input type="number" name="num3[]"><br>
            <input type="number" name="num3[]"><br>
            <input type="number" name="num3[]"><br>
            <!-- <input type="number" name="num3[]"><br> -->
        </td>
    </tr>
    <tr>
        <td>二獎</td>
        <td>同期統一發票收執聯末7 位數號碼與頭獎中獎號碼末7 位相同者各得獎金4萬元</td>
    </tr>
    <tr>
        <td>三獎</td>
        <td>同期統一發票收執聯末6 位數號碼與頭獎中獎號碼末6 位相同者各得獎金1萬元</td>
    </tr>
    <tr>
        <td>四獎</td>
        <td>同期統一發票收執聯末5 位數號碼與頭獎中獎號碼末5 位相同者各得獎金4千元</td>
    </tr>
    <tr>
        <td>五獎</td>
        <td>同期統一發票收執聯末4 位數號碼與頭獎中獎號碼末4 位相同者各得獎金1千元</td>
    </tr>
    <tr>
        <td>六獎</td>
        <td>同期統一發票收執聯末3 位數號碼與 頭獎中獎號碼末3 位相同者各得獎金2百元</td>
    </tr>
    <tr>
        <td>增開六獎</td>
        <td>
            <input type="number" name="num4[]"><br>
            <!-- <input type="number" name="num4[]"> -->
        </td>
    </tr>
</table>

<input class="btn btn-primary margin-auto align-center" type="submit" value="送出">

</div>
</form>
</body>
</html>