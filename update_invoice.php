
<?php
    include "./com/base.php";
?>


<?php
    $data=[
        'id'=>$_POST['id'],
        'period'=>$_POST['period'],
        'year'=>$_POST['year'],
        'code'=>$_POST['code'],
        'number'=>$_POST['number'],
        'expend'=>$_POST['expend'],
    ]; 
    $res=save("invoice",$data);
    // echo $res;
    if($res>0){
        to("list.php");
    }else{
        echo "修改未完成";

    }
    
?>