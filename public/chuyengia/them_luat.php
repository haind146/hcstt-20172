<?php
require_once('../../private/initialize.php');

if (isset($_GET["q"])) {
    header('Content-Type: text/plain; charset=utf-8');
    $q = $_GET["q"];
    $results = MenhDe::find_by_keyword($q);
    $respone = "";
    foreach ($results as $result) {
        $respone .= "<a onclick='chooseMenhde(this)'>" . $result->noidung . "</a>";
    }
    die($respone);
}

if(!empty($_POST["condition"]) && !empty($_POST["ketluan"]) ){
    $list_condition = $_POST["condition"];
    $ketluan = MenhDe::find_by_noidung($_POST["ketluan"]);
    $dieukien = DieuKien::them_dieu_kien();


    foreach ($list_condition as $condition){
        $menhde = MenhDe::find_by_noidung($condition);
        $dieukien_menhde = new Dieukien_Menhde($dieukien,$menhde->id);
        $dieukien_menhde->create();
    }
    $luat = new Luat($dieukien,$ketluan->id);
    $luat->create();
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
    <nav class="nav justify-content-lg-center">
        <a class="nav-link active" href="them_luat.php">Thêm luật</a>
        <a class="nav-link" href="them_menh_de.php">Thêm mệnh đề</a>

    </nav>
</div>

<div class="container">
    <h3 class="text-center" style="text-transform: uppercase;margin-top: 1em;">Thêm luật mới</h3>
    <form method="post" action="them_luat.php">
        <div class="row">
            <div class="col-md-3">
                <br><br><br>
                <div id="khung-menhde" style="border: 1px solid #dddddd; padding: 1em 1em 1em 1em">
                    <h6>Chọn mệnh đề</h6>
                    <div id="list-menhde">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <h5>Điều kiện</h5>

                <div class="form-group input_fields_wrap row">

                    <div class="col-md-10">
                        <input name="condition[0]" id="condition0" class="form-control" type="text" onkeyup="showMenhDe(this)" required>

                    </div>
                    <button class="add_field_button btn btn-link col-md-2">
                        <i class="material-icons">add</i>
                    </button>
                </div>
            </div>
            <div class="col-md-3">
                <h5 style="margin-left: 1em">Kết luận</h5>
                <div class="col-md-10">
                    <input name="ketluan" id="ketluan" class="form-control" type="text" onkeyup="showMenhDe(this)" required>

                </div>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary" style="margin-top: 2em">Thêm luật</button>
            </div>
        </div>
    </form>
</div>
</body>

</html>
