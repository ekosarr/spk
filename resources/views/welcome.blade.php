<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="template/assets/images/logos/logo.png" />
  <link rel="stylesheet" href="template/assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="">
                  <img src="template/assets/images/baru/tombolback.png" height="50" alt="">
                </a>
                <p href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="template/assets/images/logos/logo.png" width="100" alt="">
                </p>
                <form>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                        <button type="button" class="btn btn-success" id="resetButton">Reset</button>
                    </div>
                    <a class="text-primary fw-bold" href="./index.html">Lupa Password ?</a>
                  </div>
                  <a href="./index.html" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Login</a>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Tidak punya akun ?</p>
                    <a class="text-primary fw-bold ms-2" href="./authentication-register.html">Buat akun</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="template/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="template/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.getElementById('resetButton').addEventListener('click', function() {
      document.getElementById('exampleInputEmail1').value = '';
      document.getElementById('exampleInputPassword1').value = '';
    });
  </script>
</body>

</html>
