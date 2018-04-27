<?php
/**
 * Created by PhpStorm.
 * User: Hai Nguyen
 * Date: 4/27/2018
 * Time: 10:35 AM
 */
require_once ("../../private/initialize.php");

if (!empty($_POST["menhde"])) {
    $menhde = new MenhDe($_POST["menhde"]);
    $menhde->create();
}
?>


<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="">
    <link rel="stylesheet" href="../static/bootstrap-4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="../static/jquery-3.2.1.slim.min.js"></script>
    <script src="../static/bootstrap-4.0.0/js/bootstrap.min.js"></script>
    <script src="../static/popper.min.js"></script>
    <script src="../static/bootstrap-4.0.0/js/action.js"></script>
    <style>
body {
    /*min-height: 1000px;*/
}

        .form-check {
    margin-bottom: 10px;
        }
    </style>
</head>

<body>
<!-- HEADER -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">ViDoctor</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="../benhnhan.php">Trang chủ<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="them_luat.php">Chuyên gia</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <h3 class="text-center" style="text-transform: uppercase;margin-top: 1em;">Thêm mệnh đề</h3>
    <form method="post" action="them_menh_de.php">
        <div class="row">
           <div class="form-group offset-4 col-md-4">
               <label>Nội dung</label>
               <input class="form-control" type="text" name="menhde[noidung]" required>
           </div>
            <div class="offset-4"></div>
            <div class="form-group offset-4 col-md-4">
                <label>Vị trí</label>
                <select class="form-control" type="text" name="menhde[vitri]" >
                    <option>khác</option>
                    <option>tai</option>
                    <option>mũi</option>
                    <option>họng</option>
                    <option>mắt</option>
                    <option>miệng</option>
                    <option>đầu</option>
                    <option>cổ</option>
                </select>
            </div>
            <div class="offset-4"></div>
            <div class="form-group offset-4 col-md-4">
                <label>Loại</label>
                <select class="form-control" type="text" name="menhde[loai]" >
                    <option>triệu chứng</option>
                    <option>bệnh</option>
                    <option>thời tiết</option>

                    <option>nhiệt độ</option>
                    <option>tuổi</option>
                    <option>thời gian</option>

                </select>
            </div>
            <div class="offset-4"></div>
            <div class="offset-4 col-md-4"><button type="submit" class="btn btn-primary">Thêm mệnh đề</button></div>

        </div>
    </form>
</div>
</body>

</html>