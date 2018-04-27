<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Hệ thống hỗ trợ chuẩn đoán bệnh</title>
  <meta content="">
  <link rel="stylesheet" href="static/bootstrap-4.0.0/css/bootstrap.min.css">
  <script src="static/jquery-3.2.1.slim.min.js"></script>
  <script src="static/bootstrap-4.0.0/js/bootstrap.min.js"></script>
  <script src="static/popper.min.js"></script>
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

    <form action="benhnhan2.php">
      <h3>Nhập triệu chứng để hệ thống chuẩn đoán.</h3>
      <hr />

      <div class="row" style="min-height: 400px;border: 1px grey solid;">
        <div class="col-md-2">
          <!-- Vị trí triệu chứng -->
          <h4 class="text-center">Vị trí</h4>
          <hr />
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="tai-tab" data-toggle="pill" href="#tai" role="tab" aria-controls="tai" aria-selected="true">
              Tai
            </a>
            <a class="nav-link" id="mui-tab" data-toggle="pill" href="#mui" role="tab" aria-controls="mui" aria-selected="false">
              Mũi
            </a>
            <a class="nav-link" id="hong-tab" data-toggle="pill" href="#hong" role="tab" aria-controls="hong" aria-selected="false">
              Họng
            </a>
            <a class="nav-link" id="khac-tab" data-toggle="pill" href="#khac" role="tab" aria-controls="khac" aria-selected="false">
              Khác
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <!-- Chọn triệu chứng -->
          <h4 class="text-center">Triệu chứng</h4>
          <hr />
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="tai" role="tabpanel" aria-labelledby="tai-tab">
              <div class="row">
                <div class="col-6">
                  <div class="form-check">
                    <input type="checkbox" name="symptom" class="form-check-input">
                    <label class="form-check-label">Triệu chứng xyz</label>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-check">
                    <input type="checkbox" name="symptom" class="form-check-input">
                    <label class="form-check-label">Triệu chứng xyz</label>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-check">
                    <input type="checkbox" name="symptom" class="form-check-input">
                    <label class="form-check-label">Triệu chứng xyz</label>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-check">
                    <input type="checkbox" name="symptom" class="form-check-input">
                    <label class="form-check-label">Triệu chứng xyz</label>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-check">
                    <input type="checkbox" name="symptom" class="form-check-input">
                    <label class="form-check-label">Triệu chứng xyz</label>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-check">
                    <input type="checkbox" name="symptom" class="form-check-input">
                    <label class="form-check-label">Triệu chứng xyz</label>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-check">
                    <input type="checkbox" name="symptom" class="form-check-input">
                    <label class="form-check-label">Triệu chứng xyz</label>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-check">
                    <input type="checkbox" name="symptom" class="form-check-input">
                    <label class="form-check-label">Triệu chứng xyz</label>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-check">
                    <input type="checkbox" name="symptom" class="form-check-input">
                    <label class="form-check-label">Triệu chứng xyz</label>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-check">
                    <input type="checkbox" name="symptom" class="form-check-input">
                    <label class="form-check-label">Triệu chứng xyz</label>
                  </div>
                </div>

              </div>
            </div>
            <div class="tab-pane fade" id="mui" role="tabpanel" aria-labelledby="mui-tab">
              2
            </div>
            <div class="tab-pane fade" id="hong" role="tabpanel" aria-labelledby="hong-tab">
              3
            </div>
            <div class="tab-pane fade" id="khac" role="tabpanel" aria-labelledby="khac-tab">
              4
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <!-- Thông tin người dùng -->
          <h4>Thông tin</h4>
          <hr />
          <div class="form-group">
            <label for="inputName">Họ tên</label>
            <input type="text" name="name" class="form-control" id="inputName" aria-describedby="emailHelp" placeholder="Nhập tên">
          </div>
          <div class="form-group">
            <label for="inputAge">Tuổi</label>
            <input type="number" name="age" class="form-control" id="inputName" placeholder="Nhập tuổi">
          </div>
          <div class="form-group">
            <label for="inputGender">Giới tính</label>
            <div class="form-check">
              <input type="radio" name="gender" value="male" checked class="form-check-input" id="gender1">
              <label class="form-check-label" for="gender1">Nam</label>
            </div>
            <div class="form-check">
              <input type="radio" name="gender" value="female" class="form-check-input" id="gender2">
              <label class="form-check-label" for="gender2">Nữ</label>
            </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Gửi thông tin</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</body>

</html>
