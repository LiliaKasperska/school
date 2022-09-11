<?php 
    require("../connect_db.php");
    require_once("header.php");
    $sql="SELECT * FROM type_file ";
    $res=mysqli_query($connect,$sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin school</title>
        <link rel="stylesheet" href="css.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
    </head>
    <body>
        <div class="row first_div"></div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="row" >
                    <ul class="nav nav-tabs" align="center">
                        <li class="nav-item">
                            <a class="nav-link " href="adm_downl_file_add.php">Додати</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="adm_downl_file_delete.php">Видалити</a>
                        </li>
                    </ul>
                </div>
                <div class="row after_menu"></div>
                <h2 align="center">Видалити файл</h2>
                <div class="row after_menu"></div>
                <form action="adm_downl_file_delete.php" method="post">
                    <select class="custom-select" name="selectFT">
                        <option selected>Виберіть розділ</option>
                        <?php 
                            while($result=mysqli_fetch_array($res)){
                                $a0=$result[0];
                                $a1=$result[1];
                                echo "<option value=\"$a0\"";
                                if(!empty($_POST['selectFT']) && $_POST['selectFT']=="$a0"){echo "selected";}
                                echo ">$a1</option>";
                            }
                            ?>
                    </select><br><br>
                    <button type="submit" class="btn btn-primary">Вибрати</button>
                    <br><br>
                    <?php 
                    if(!empty($_POST['selectFT'])){
                        if($_POST['selectFT']!="Виберіть розділ"){
                    ?>
                    <select class="custom-select" multiple name="selectF">
                        <?php 
                        $a=$_POST['selectFT'];
                            $sql="SELECT * FROM downl_file WHERE id_type='$a'";
                            $res=mysqli_query($connect,$sql);
                            while($result=mysqli_fetch_array($res)){
                                $a0=$result[0];
                                $a1=$result[1];
                                echo "<option value=\"$a0\">$a1</option>";
                            }
                            ?>
                    </select><br><br>
                    <button type="submit" class="btn btn-primary" name="123">Видалити</button>
                    <?php }} 
                    if(isset($_POST['123'])){
                        $a=$_POST['selectF'];
                        $sql="SELECT * FROM downl_file WHERE id='$a'";
                        $res=mysqli_query($connect,$sql);
                        $result=mysqli_fetch_array($res);
                        unlink($result['file']);
                        $sql="DELETE FROM downl_file WHERE id='$a'";
                        $res=mysqli_query($connect,$sql);
                        if($res){
                            echo "Файл видалено";
                        }
                    }
                    ?>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
        
    </body>
</html>