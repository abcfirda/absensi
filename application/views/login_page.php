
<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="http://103.49.239.254:8999/ci/assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Login Absensi</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>/assets/img/icons/logo/logo.png" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="http://103.49.239.254:8999/ci/assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="http://103.49.239.254:8999/ci/assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="http://103.49.239.254:8999/ci/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="http://103.49.239.254:8999/ci/assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="http://103.49.239.254:8999/ci/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <!-- Page CSS -->

  <!-- Page -->
  <link rel="stylesheet" href="http://103.49.239.254:8999/ci/assets/vendor/css/pages/page-auth.css" />
  <!-- Helpers -->
  <script src="http://103.49.239.254:8999/ci/assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="http://103.49.239.254:8999/ci/assets/js/config.js"></script>
</head>

<body>
  <!-- Content -->

  <div class="container-xxl">

    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="home.php" class="app-brand-link gap-5">
                <img src="<?php echo base_url(); ?>/assets/img/icons/logo/logo.png" alt class="w-px-100 ms-4 my-4 mb-2" />
              </a>
            </div>
            <!-- /Logo -->
            <h4 class="mb-1" id="wel" style="text-align: center;">Welcome to SiMaK!</h4>
            <p class="mb-4" id="wel" style="text-align: center;">Please sign-in to your account!</p>

            <form id="formAuthentication" class="mb-3" action="<?php echo base_url(); ?>index.php/user/login" method="POST">
              <div class="mb-3">
                <label for="user" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your user " autofocus />
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Password</label>

                </div>
                <div class="input-group input-group-merge">
                  <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>
              <div class="mx-n1">
                <button class="btn btn-primary d-grid w-50" type="submit" name="submit">Sign in</button>
              </div>
            </form>


          </div>
          <?php
          if ($this->session->flashdata('error')) {
          ?>
            <div class="alert alert-danger text-center" style="margin-top:20px;">
              <?php echo $this->session->flashdata('error'); ?>
            </div>
          <?php
          }
          ?>
        </div>
        <!-- /Register -->
      </div>
    </div>
  </div>

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="http://103.49.239.254:8999/ci/assets/vendor/libs/jquery/jquery.js"></script>
  <script src="http://103.49.239.254:8999/ci/assets/vendor/libs/popper/popper.js"></script>
  <script src="http://103.49.239.254:8999/ci/assets/vendor/js/bootstrap.js"></script>
  <script src="http://103.49.239.254:8999/ci/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="http://103.49.239.254:8999/ci/assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->

  <!-- Main JS -->
  <script src="http://103.49.239.254:8999/ci/assets/js/main.js"></script>

  <!-- Page JS -->

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>