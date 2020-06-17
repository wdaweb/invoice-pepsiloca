<?php 
include_once "./com/base.php";
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
  <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital@1&display=swap" rel="stylesheet">

  <script src="plugins/jquery-3.5.1.min.js"></script>
  <script src="plugins/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/d788500399.js" crossorigin="anonymous"></script>



</head>
<body>
    
    
    <div class="container text-light text-center col-10 col-md-6 p-3 my-5">
        <h3 class="pb-3">兌獎結果</h3>
        <?php include "./include/header.php";?>


<?php

if(empty($_GET)){
    echo "請選擇對獎的項目<a href='invoice.php'>各期獎號</a>";
    exit();
}

?>

<?php

$award_type=[
    1=>["特別獎",1,8,10000000],  //對8碼 
    2=>["特獎",2,8,2000000],
    3=>["頭獎",3,8,100000],
    4=>["二獎",3,7,40000],
    5=>["三獎",3,6,10000],
    6=>["四獎",3,5,4000],
    7=>["五獎",3,4,1000],
    8=>["六獎",3,3,200],
    9=>["增開六獎",4,3,200],
];


$aw=$_GET['aw'];

echo "年份:".$_GET['year']."<br>";
echo "獎別:". $award_type[$aw] [0]. "<br>";
echo "期別:".$_GET['period']."<br>";


$award_nums=nums("award_number",[
    "year"=>$_GET['year'],
    "period"=>$_GET['period'],
    "type"=>$award_type[$aw][1]
]);
echo "獎號數量:" .$award_nums;

$award_numbers=all("award_number",[
            "year"=>$_GET['year'],
            "period"=>$_GET['period'],
            "type"=>$award_type[$aw][1]
        ]) ;
 echo "<h5 style='color:yellow'>本期對獎獎號:</h5>";


$t_num=[];
foreach($award_numbers as $num){
    echo $num['number']."<br>";
    $t_num[]=$num['number'];
}


// if($award_nums>1){
//     $award_numbers=all("award_number",[
//         "year"=>$_GET['year'],
//         "period"=>$_GET['period'],
//         "type"=>$award_type[$_GET['aw']][1]
//     ]) ;
// }else{
//     $award_numbers=find("award_number",[
//         "year"=>$_GET['year'],
//         "period"=>$_GET['period'],
//         "type"=>$award_type[$_GET['aw']][1]
//     ]) ;
// }

// echo "<pre>";
// print_r($award_numbers);
// echo "</pre>";

echo "<h5 style='color:yellow'>本期我的中獎發票號碼:</h5>";


$count=0;


$invoices=all("invoice",[
    "year"=>$_GET['year'],
    "period"=>$_GET['period'],]);

foreach ($invoices as $ins){

    foreach($t_num as $tn){

        $len=$award_type[$aw][2];

        $start=8-$len;

        //針對增開六獎特別處理
        if($aw!=9){
            $target_num=mb_substr($tn,$start,$len);
            
        }else{
            $target_num=$tn;
        }

        if(mb_substr($ins['number'],$start,$len) == $target_num){
            echo "<span  style='color:pink;font-size:20px'>".$ins['number']."中獎了!</span>"."<i class='far fa-grin-stars' style='color:pink'></i>". "<br>"; 
            $count++;
            echo "<br>";
        }
        
    }
}

$money=$award_type[$aw][3]; //中獎單筆金額
$total = $count*$money; //中獎總金額





// <i class="far fa-grin-stars"></i>


//複數多筆
// $invoices=all("invoice",[
//     "year"=>$_GET['year'],
//     "period"=>$_GET['period'],]);

// foreach ($invoice as $ins){

//     foreach($t_num as $tn){
//         if($ins['number']== $tn){
            
//         }else{
//             echo $ins['number']."沒中獎";
//         }
//         echo "<br>";
//     }
    
// } 

//php生成html寫法
// echo "<p>總筆數:".$count."</p>";
// echo "<p>總金額:".$total."</p>";
    

?>

<hr>
<!-- 
//html的寫法 -->
<div style="inline-block">
<p>總中獎筆數:<?=$count;?>筆</p>
<p>總中獎金額:<?=$total;?>元</p>
</div>



</div>

</body>
</html>