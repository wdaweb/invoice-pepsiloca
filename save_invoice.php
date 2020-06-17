

<?php
include "./com/base.php";



/* $sql="insert into invoice (
    `period`,
    `year`,
    `code`,
    `number`,
    `expend`) values(
    '".$_POST['period']."',
    '".$_POST['year']."',
    '".$_POST['code']."',
    '".$_POST['number']."',
    '".$_POST['expend']."')";
    echo $sql;
    $res=$pdo->exec($sql); */
    ?>

<div class="container text-light col-10 col-md-6 p-3 my-5">
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
        echo "新增成功<br>";
        echo "<a class='nbtn' href='index.php'>繼續輸入</a><br>";

        echo "<a class='nbtn' href='list.php'>發票列表</a>";
    }else{
        echo "新增失敗";

    }


?>
</div>