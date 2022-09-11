<?php
require("connect_db.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Волосівська школа</title>
        <link rel="stylesheet" href="my_style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
    </head>
    <body style='overflow-x:hidden;'>
        <div class="row">
</div>
    <div class="navbar fixed-top navbar-expand-sm  navbar-dark bg_main_menu">
        <div class="col-sm-1"></div>
        <div class="col-sm-10 row">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Переключатель навигации">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php" style="color: #181810; font-weight: bold;">Волосівська школа</a>
        <div class="collapse navbar-collapse justify-content-end" id="nav-content"> 
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php" style="color: #181810;">Новини</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="Preview" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color: #181810;">Документація</a>
                    <div class="dropdown-menu" aria-labelledby="Просмотр">
                        <a class="dropdown-item" href="doc_poloz.php" style="color: #181810;">Положення</a>
                        <a class="dropdown-item" href="letter_poloz.php" style="color: #181810;">Листи</a>
                        <a class="dropdown-item" href="doc_order.php" style="color: #181810;">Накази</a>
                        <a class="dropdown-item" href="doc_other.php" style="color: #181810;">Інші документи</a>
                    </div>
                </li>
            </ul>
        </div>
        </div>
        <div class="col-sm-1" style="background-color: #eeeee6;"></div>
</div>
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <div class="row after_menu">
            <div class="col-sm-1 fon_1"></div>
            <div class="col-sm-10 fon_1">
            <img src="img/fon.jpg" width="1250px" height="300px">
            </div>
            <div class="col-sm-1 fon_1"></div>
        </div>
        <div class="row" style="height: 10px;">
        <div class="col-sm-1 fon_1"></div>
            <div class="col-sm-2" style="background-color: #eeeee6;"></div>
            <div class="col-sm-6"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-1 fon_1"></div>
        </div>
    </body>
</html>