<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>統一發票管理系統</title>
    <link rel="stylesheet" herf="./css/style.css">

    <link rel="stylesheet" href="plugins/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/custom.css">
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&family=Open+Sans&display=swap" rel="stylesheet">


  <script src="plugins/jquery-3.5.1.min.js"></script>
  <script src="plugins/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/d788500399.js" crossorigin="anonymous"></script>



</head>
<body>
    <?php include "./include/header.php";?>
    
    <form action="save_invoice.php" method="post" class="my-5" >
  <div class="container border border-light rounded-lg bg-dark text-light col-10 col-md-6 p-3">
  <h3 class="text-center pb-3">統一發票輸入</h3>  
  <div>
       期別:
        <select class="form-group col-12 col-md-6 mr-2 py-1" name="period">
            <option value="1">1,2月</option>
            <option value="2">3,4月</option>
            <option value="3">5,6月</option>
            <option value="4">7,8月</option>
            <option value="5">9,10月</option>
            <option value="6">11,12月</option>
        </select>
  </div>
  <div>
        年份:
        <select class="form-group col-12 col-md-6 mr-2 py-1" name="year">
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
        </select>
  </div>
  <div >
        獎號:
        <input class="form-group col-12 col-md-2 py-1" type="text" name="code" plasceholder="發票字母,例:AA">
        <input class="form-group col-md-6 py-1" type="text" name="number" plasceholder="發票號碼">
        <input class="btn btn-primary btm-sm" type="submit"  value="儲存">
  </div>
   <div>
        花費:
        <input class="form-group col-12 col-md-5 py-1" type="number" name="expend">
        <input class="btn btn-primary btm-sm" type="submit" value="儲存">
</div>
</div>
    </form>
</body>
</html>