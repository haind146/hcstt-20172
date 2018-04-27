<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta content="">
  <link rel="stylesheet" href="static/bootstrap-4.0.0/css/bootstrap.min.css">
  <script src="static/jquery-3.2.1.slim.min.js"></script>
  <script src="static/bootstrap-4.0.0/js/bootstrap.min.js"></script>
  <script src="static/popper.min.js"></script>
  
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <style>
    body {
      /*min-height: 1000px;*/
    }

    .form-check {
      margin-bottom: 10px;
    }

    div.stars {
      width: 600px;
      display: inline-block;
    }

    input.star {
      display: none;
    }

    label.star {
      float: right;
      padding: 10px;
      font-size: 36px;
      color: #444;
      transition: all .2s;
    }

    input.star:checked~label.star:before {
      content: '\f005';
      color: #FD4;
      transition: all .25s;
    }

    input.star-5:checked~label.star:before {
      color: #FE7;
      text-shadow: 0 0 20px #952;
    }

    input.star-1:checked~label.star:before {
      color: #F62;
    }

    label.star:hover {
      transform: rotate(-15deg) scale(1.3);
    }

    label.star:before {
      content: '\f006';
      font-family: FontAwesome;
    }
  </style>
</head>

<body>
  <!-- HEADER -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">ViDoctor</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="benhnhan.php">Trang chủ<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="chuyengia/them_luat.php">Chuyên gia</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <h2 class="text-center">Hệ thống hỗ trợ bệnh nhân</h2>
    <hr />

    <!-- <form action="benhnhan.php"> -->
    <h3>Nhập triệu chứng để hệ thống chuẩn đoán.</h3>
    <hr />

    <div class="row" style="min-height: 400px;border: 1px grey solid;">

      <div class="col-md-8">
        <!-- Chọn triệu chứng -->
        <h4 class="text-center">Kết quả chuẩn đoán</h4>
        <hr />
        <div class="row">
          <div class="col-3">
            <b>
                Tên bệnh:
              </b>
          </div>
          <div class="col-9">
            <h4>
                Viêm Amidan
              </h4>
          </div>
        </div>
        <hr />
        <div class="row">
          <div class="col-3">
            <b>
                Nguyên nhân:
              </b>
          </div>
          <div class="col-9">
            Ăn nhiều kem
          </div>
        </div>
        <hr />
        <div class="row">
          <div class="col-3">
            <b>
                Cách điều trị:
              </b>
          </div>
          <div class="col-9">
            Cắt
          </div>
        </div>
        <hr />
        <div class="row">
          <div class="col-3">
            <b>
                Các triệu trứng:
              </b>
          </div>
          <div class="col-9">
            Sốt, Đau họng
          </div>
        </div>
        <hr />
        <h4>Đánh giá của bạn:</h4>
        <form action="">
          <div class="stars">
            <input class="star star-5" value="10" id="star-10" type="radio" name="star" />
            <label class="star star-5" for="star-10"></label>
            <input class="star star-5" value="9" id="star-9" type="radio" name="star" />
            <label class="star star-5" for="star-9"></label>
            <input class="star star-5" value="8" id="star-8" type="radio" name="star" />
            <label class="star star-5" for="star-8"></label>
            <input class="star star-5" value="7" id="star-7" type="radio" name="star" />
            <label class="star star-5" for="star-7"></label>
            <input class="star star-5" value="6" id="star-6" type="radio" name="star" />
            <label class="star star-5" for="star-6"></label>
            <input class="star star-5" value="5" id="star-5" type="radio" name="star" />
            <label class="star star-5" for="star-5"></label>
            <input class="star star-4" value="4" id="star-4" type="radio" name="star" />
            <label class="star star-4" for="star-4"></label>
            <input class="star star-3" value="3" id="star-3" type="radio" name="star" />
            <label class="star star-3" for="star-3"></label>
            <input class="star star-2" value="2" id="star-2" type="radio" name="star" />
            <label class="star star-2" for="star-2"></label>
            <input class="star star-1" value="1" id="star-1" type="radio" name="star" />
            <label class="star star-1" for="star-1"></label>

          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-sm" style="padding: 5px 20px;">Gửi</button>
          </div>
        </form>
      </div>

      <div class="col-md-4">
        <!-- Thông tin người dùng -->
        <h4>Thông tin</h4>
        <hr />
        <div class="form-group">
          <label for="inputName">Họ tên</label>
          <input type="text" name="name" value="Nguyễn Văn A" disabled class="form-control" id="inputName" aria-describedby="emailHelp" placeholder="Nhập tên">
        </div>
        <div class="form-group">
          <label for="inputAge">Tuổi</label>
          <input type="number" name="age" value="20" disabled class="form-control" id="inputName" placeholder="Nhập tuổi">
        </div>
        <div class="form-group">
          <label for="inputGender">Giới tính</label>
          <div class="form-check">
            <input type="radio" name="gender" value="male" disabled checked class="form-check-input" id="gender1">
            <label class="form-check-label" for="gender1">Nam</label>
          </div>
          <div class="form-check">
            <input type="radio" name="gender" value="female" disabled class="form-check-input" id="gender2">
            <label class="form-check-label" for="gender2">Nữ</label>
          </div>
        </div>
        <div class="text-center">
          <a href="benhnhan.php" type="submit" class="btn btn-primary">Nhập lại</a>
        </div>
      </div>
    </div>
    <!-- </form> -->
  </div>
</body>

</html>
