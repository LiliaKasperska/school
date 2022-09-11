<?php
require_once("header.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Медівський заклад загальної середньої освіти I-II ступенів</title>
        <link rel="stylesheet" href="my_style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
    </head>
    <body>
        </div>
            <div class="row ">
                <div class="col-sm-1 fon_1"></div>
                <div class="col-sm-2" style="background-color: #eeeee6;">
                    
                </div>
                <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <h1>Положення</h1>
                        <hr class="hr_title"><br>
                        <form action="doc_poloz.php" method="post">
                        <?php
                        $sql="SELECT * FROM downl_file WHERE id_type='1'";
                        $res=mysqli_query($connect,$sql);
                        $n=array();
                        while($result=mysqli_fetch_assoc($res)){
                            $n[]=$result['file'];
                        ?>
                        <h5><?php echo $result['name'];?></h5>
                        <a href="<?php echo $result['file'];?>" style="color: #181810;"> Завантажити</a>
                        <hr>
                        <?php } ?>
                          </form>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                </div>
                <div class="col-sm-2 ">
                    <?php require_once("right_block.php"); ?>
                </div>
                <div class="col-sm-1 fon_1"></div>
            </div>
    </body>
</html>