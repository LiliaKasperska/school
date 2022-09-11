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
    <body >
        <div>
            <div class="row ">
                <div class="col-sm-1 fon_1"></div>
                <div class="col-sm-2" style="background-color: #eeeee6; border: 0px solid #eeeee6;">
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <?php 
                                $a=$_GET['idn'];
                                $sql="SELECT * FROM news WHERE id='$a'";
                                $res=mysqli_query($connect,$sql);
                                $result=mysqli_fetch_assoc($res)
                            ?> 
                            <br>
                            <h2><?php echo $result['title']; ?></h2>
                            <hr class="hr_title">
                            <p><?php echo $result['text'];?></p>
                            <?php
                                $ar_img=array();
                                $a=$result['img'];
                                $q="";
                                for($i=0;$i<strlen($a);$i++){
                                    if($a[$i]=="*"){
                                        $ar_img[]=$q;
                                        $q="";
                                    } else {
                                        $q=$q.$a[$i];
                                    }
                                }
                                for($i=0;$i<count($ar_img);$i++){
                                    $a=$ar_img[$i];
                                    echo "<img src='$a' width='500'><br><br>";
                                }
                            ?>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>
                <div class="col-sm-2" >
                    <?php require_once("right_block.php"); ?>
                </div>
                <div class="col-sm-1 fon_1"></div>
            </div>
    </body>
</html>
