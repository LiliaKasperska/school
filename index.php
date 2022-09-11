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
                            <br>
                            <h1>НОВИНИ</h1>
                            <hr class="hr_title">
                            <?php 
                                $sql="SELECT * FROM news";
                                $res=mysqli_query($connect,$sql);
                                $n=array();
                                while($result=mysqli_fetch_assoc($res)){
                                    $n[]=$result;
                                }
                                $news=array_reverse($n);
                            ?>
                            <form action="news.php" method="post">
                                <?php 
                                    for($i=0;$i<count($news);$i++){
                                        $a0=$news[$i]['id'];
                                        $a1=$news[$i]['title'];
                                        $a2=$news[$i]['text_start'];?>
                            <h2><a style="color: #181810;text-decoration: none;" href="news.php?idn=<?php echo $a0; ?>"><?php echo $a1; ?></a></h2>
                            <p><?php echo $a2; ?>… <a href="news.php?idn=<?php echo $a0; ?>" style="color: #181810;text-decoration: none;text-align: justify;">Далі →</a></p>
                            <hr>
                            <?php }
                                ?>
                            </form>
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
