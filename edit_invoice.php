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


    <div class="container text-center text-light col-12 col-md-6 p-3 my-5">
        <?php
        include "./include/header.php";
        include_once "./com/base.php";
        $id=$_GET['id'];
        $res=find("invoice",$id);        
        
        ?>
        <h3 class=" pb-3 m-3">編輯我的發票</h3>

        <form action="update_invoice.php" method="post" class="my-3">
                <input type="hidden" name="id" value="<?=$id;?>">
            <div>
                年份:
                <input class="form-group  col-12 col-md-5 py-1" type="text" name="year" value="<?=$res['year'];?>">


            </div>
            <div>
                期別:
                <input class="form-group  col-12 col-md-5 py-1" type="text" name="period" value="<?=$res['period'];?>">


            </div>
            <div>
                獎號:
                <input class="form-group col-3 col-md-2 py-1" type="text" name="code" value="<?=$res['code'];?>">
                <input class="form-group col-md-3 py-1" type="text" name="number" value="<?=$res['number'];?>">

            </div>
            <div>
                花費:
                <input class="form-group col-12 col-md-5 py-1" type="number" name="expend" value="<?=$res['expend'];?>">
                
            </div>
            <input class="btn btn-primary btm-sm" type="submit" value="儲存">
            <input class="btn btn-primary btm-sm" type="reset" value="取消">
    </div>
    </form>
</body>
</html>