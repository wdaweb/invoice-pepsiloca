<link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="plugins/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/custom.css">
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&family=Open+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital@1&display=swap" rel="stylesheet">

  <script src="plugins/jquery-3.5.1.min.js"></script>
  <script src="plugins/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/d788500399.js" crossorigin="anonymous"></script>

<?php
include "./com/base.php";

    ?>

<div class="container text-center text-light col-10 col-md-6 p-3 my-5">


    <?php
    $data=[
        'period'=>$_POST['period'],
        'year'=>$_POST['year'],
        'code'=>$_POST['code'],
        'number'=>$_POST['number'],
        'expend'=>$_POST['expend'],
    ];
    $res=save("invoice",$data);
    if($res==1){
        echo "<h5>"."我的發票新增成功!"."</h5>"."<br>";
    }else{
        echo "新增失敗";

    }
 
    ?>
    <table>
        <tr>   
        <a class="btn btn-primary m-2" href="index.php" role="button">繼續輸入</a>
        <a class="btn btn-primary m-2" href="list.php" role="button">發票列表</a>
        </tr>
    </table>
    </div>
