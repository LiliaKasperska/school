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
                    <ul class="nav nav-tabs"align="center">
                        <li class="nav-item">
                            <a class="nav-link active" href="adm_downl_file_add.php">Додати</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="adm_downl_file_delete.php">Видалити</a>
                        </li>
                    </ul>
                </div>
                <div class="row after_menu"></div>
                <h2 align="center">Додати файл</h2>
                <div class="row after_menu"></div>
                <form action="adm_downl_file_add.php" enctype="multipart/form-data" method="post">
                <select class="custom-select" name="selectF">
                    <option selected>Виберіть розділ</option>
                    <?php 
                        while($result=mysqli_fetch_array($res)){
                            $a0=$result[0];
                            $a1=$result[1];
                            echo "<option value=\"$a0\">$a1</option>";
                        }
                        ?>
                </select><br><br>
                    <fieldset class="form-group">
                        <label for="titleNews">Назва</label>
                        <input type="text" class="form-control" name="nameF"><br>
                            <div class="custom-file">
                                <input type="file" name="path" title="Виберіть файл" >
                                
                            </div><input type="submit"  name="button" class="btn btn-primary" value="Завантажии">
                    </fieldset>
                </form>
                <?php
                    if(isset($_POST['button'])){
                        if(!empty($_POST['nameF'])){
                        $file = "C:/xampp/htdocs/school/adm/adm_file/".$_FILES['path']['name'];
                        move_uploaded_file($_FILES['path']['tmp_name'], $file);
                        if(isset($_FILES['path']['name'])){
                            echo "Завантажений файл: ".$_FILES['path']['name']."</br>";
                            echo "Розмір: ".$_FILES['path']['size']."байт";
                        }
                        $a1=$_POST['nameF'];
                        $a2=$_POST['selectF'];
                        $sql="INSERT INTO downl_file(name, file, id_type) VALUES ('$a1','$file','$a2')";
                        $res=mysqli_query($connect,$sql);
                        if($res){
                            echo "Файл додано";
                        }
                    } else {
                        echo " * Заповніть усі поля!";
                    } }
                ?>
            </div>
            <div class="col-sm-3"></div>
        </div>
        
    </body>
</html>