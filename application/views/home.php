<!DOCTYPE html>
<?php
$user = $this->session->userdata('user');
extract($user);
?>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard Admin | SiMaK</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>/assets/img/icons/logo/logo.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="logo">
            <a href="home.php" class="app-brand-link">
              <img src="../assets/img/icons/logo/logo.png" alt class="w-px-100 ms-4 my-4" />
              <!-- <span class="app-brand-text demo menu-text text-none fw-bolder ms-2">SiMaK</span> -->
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1"> 
            <!-- Dashboard -->
            <li class="menu-item active">
              <a href="<?= base_url() ?>index.php/user/sadminHome" class="menu-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door my-auto me-3" viewBox="0 0 16 16">
                  <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
                </svg>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- Tables -->
            <li class="menu-item">
            <a href="<?php echo base_url(); ?>index.php/user/table_user" class="menu-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-text my-auto me-3" viewBox="0 0 16 16">
                  <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                </svg>
                <div data-i18n="Data Table">Data User</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="<?php echo base_url(); ?>index.php/user/table" class="menu-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-text my-auto me-3" viewBox="0 0 16 16">
                  <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                </svg>
                <div data-i18n="Data Table">Data Siswa</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="<?php echo base_url(); ?>index.php/user/tabledata_admin" class="menu-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-text my-auto me-3" viewBox="0 0 16 16">
                  <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                </svg>
                <div data-i18n="Data Table">Data Table Admin</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="<?php echo base_url(); ?>index.php/user/datarecap_admin" class="menu-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-text my-auto me-3" viewBox="0 0 16 16">
                  <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                </svg>
                <div data-i18n="Data Table">Data Recap Admin</div>
              </a>
            </li>
            <!-- Notifications -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-files-alt my-auto me-3" viewBox="0 0 16 16">
                  <path d="M11 0H3a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2 2 2 0 0 0 2-2V4a2 2 0 0 0-2-2 2 2 0 0 0-2-2zm2 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1V3zM2 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V2z"/>
                </svg>
                <div data-i18n="Notifications">Data Recap</div>
              </a>
              <ul class="menu-sub">
                <li>
                  <a href="<?php echo base_url(); ?>index.php/user/tabelpresent" class="menu-link">
                    <div data-i18n="Basic">Present</div>
                  </a>
                </li>
                <li>
                <a href="<?php echo base_url(); ?>index.php/user/tablepermission" class="menu-link">
                    <div data-i18n="Basic">Permission</div>
                  </a>
                </li>
                <li>
                <a href="<?php echo base_url(); ?>index.php/user/tabelabsent" class="menu-link">
                    <div data-i18n="Basic">Absent</div>
                  </a>
                </li>
              </ul>
            </li>
            <!-- <li class="menu-item">
              <a href="tables-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Tables</div>
              </a>
            </li> -->
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar" >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-right">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx fs-4 lh-0"></i>
                  <span class="form-control border-0 shadow-none">Sistem Manajemen Kehadiran</span></div>
               </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-2">
                  <h6 class="mb-0">Admin</h6>
                </li>

                <!-- User -->
                
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      
                      <img src="../assets/img/avatars/profile.svg" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/profile.svg" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">Admin</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/user/logout">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-8 mb-1 order-1">
                  <div class="card" style="height:18.75rem;">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h1 class="card-title mt-3 mb-0 ms-4 text-dark" style="font-size:2.5em; font-weight: bold;">Welcome, Admin</h1>
                          <h1 class="card-title text-primary mt-3 ms-4" style="">
                            <div class="datetime">
                              <div class="time"></div>
                            </div>
                          </h1>
                          <h6 class="card-title text-secondary ms-4" style="">
                            <div class="date"></div>
                              </h6>
                        </div>
                      </div>
                      <div class="col-sm-4 text-center text-sm-left">
                        <div class="card-body py-4 pb-0 px-0 px-md-4">
                          <img
                            src="../assets/img/illustrations/man-with-laptop-light.png"
                            height="110"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                            style="position: absolute; bottom:20px"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Transactions -->
                <div class="col-md-7 col-lg-4 order-2 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Last Online</h5>
                      <div class="dropdown">
                        <button
                          class="btn p-0"
                          type="button"
                          id="transactionID"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                          <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                          <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                          <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar avatar-online">
                          <img src="<?php echo base_url(); ?>/assets/img/avatars/profile.svg" alt class="w-px-40 h-auto" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1 ms-3">XII RPL C</small>
                              <h6 class="mb-0 ms-3">Damar Budi</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">11 m ago</h6>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar avatar-online">
                          <img src="<?php echo base_url(); ?>/assets/img/avatars/profile.svg" alt class="w-px-40 h-auto" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1 ms-3">XII RPL A</small>
                              <h6 class="mb-0 ms-3">Firdausi Ramadan</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">15 m ago</h6>
                             
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar avatar-online mr-3">
                          <img src="<?php echo base_url(); ?>/assets/img/avatars/profile.svg" alt class="w-px-40 h-auto" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1 ms-3">XII RPL B</small>
                              <h6 class="mb-0 ms-3">Fajar Roziqin</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">23 m ago</h6>
                            
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Transactions -->
             
                 
                  
               <!-- Total Revenue -->
               <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="text-center">
                      <div class="dropdown">
                        <button
                          class="btn btn-md btn-primary dropdown-toggle"
                          type="button"
                          id="growthReportId"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                          style="position: absolute; top:20px; right:20px"
                        >
                          Date
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                          <a class="dropdown-item" href="javascript:void(0);">2021</a>
                          <a class="dropdown-item" href="javascript:void(0);">2020</a>
                          <a class="dropdown-item" href="javascript:void(0);">2019</a>
                        </div>
                      </div>
                    </div>
                  <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-0">
                      <h5 class="m-0 me-2">Present Statistics</h5>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                    <div class="col-md-12">
                    <div class="d-flex my-5 w-100 justify-content align-items-center mb-3">
                      <div class="d-flex w-50 mx-2 flex-column align-items-center ">
                        <div id="orderStatisticsChart"></div>
                       </div>
                    
                    <ul class="p-0 m-0 w-100">
                          <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                              <span class="avatar-initial rounded bg-ijo"
                                ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
                                  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                  <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                                </svg></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                              <div class="me-7">
                                <h6 class="mb-0">Present</h6>
                              </div>
                              <div class="user-progress" style="width:450px">
                                  <div class="progress">
                                    <div class="progress-bar bg-ijo" role="progressbar" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100" style="width:75%">
                                    </div>  
                                </div>
                                <small class="fw-semibold">75%</small>
                              </div>
                            </div>
                          </li>
                          <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                              <span class="avatar-initial rounded bg-chelsi"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-paper" viewBox="0 0 16 16">
                                <path d="M4 0a2 2 0 0 0-2 2v1.133l-.941.502A2 2 0 0 0 0 5.4V14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5.4a2 2 0 0 0-1.059-1.765L14 3.133V2a2 2 0 0 0-2-2H4Zm10 4.267.47.25A1 1 0 0 1 15 5.4v.817l-1 .6v-2.55Zm-1 3.15-3.75 2.25L8 8.917l-1.25.75L3 7.417V2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v5.417Zm-11-.6-1-.6V5.4a1 1 0 0 1 .53-.882L2 4.267v2.55Zm13 .566v5.734l-4.778-2.867L15 7.383Zm-.035 6.88A1 1 0 0 1 14 15H2a1 1 0 0 1-.965-.738L8 10.083l6.965 4.18ZM1 13.116V7.383l4.778 2.867L1 13.117Z"/>
                              </svg></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">Permit</h6>
                              </div>
                                <div class="user-progress" style="width:450px">
                                  <div class="progress">
                                    <div class="progress-bar bg-chelsi" role="progressbar" aria-valuenow="15"
                                    aria-valuemin="0" aria-valuemax="100" style="width:15%">
                                    
                                    </div>
                                  
                                </div>
                                <small class="fw-semibold">15%</small>
                              </div>
                          </li>
                          <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                              <span class="avatar-initial rounded bg-abang"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sign-do-not-enter" viewBox="0 0 16 16">
                                <path d="M3.584 6V4h.69c.596 0 .886.355.886.998S4.867 6 4.274 6h-.69Zm.653-1.72h-.32v1.44h.32c.396 0 .582-.239.582-.718 0-.481-.188-.722-.582-.722Zm2.729.585v.272c0 .566-.318.903-.83.903-.513 0-.833-.337-.833-.903v-.272c0-.569.32-.904.832-.904.513 0 .83.337.83.904Zm-.337.274v-.277c0-.413-.211-.617-.494-.617-.285 0-.495.204-.495.617v.277c0 .414.21.618.495.618.283 0 .494-.204.494-.618Zm1.358-.579V6h-.319V4h.293l.933 1.436h.015V4h.319v2h-.291L8 4.56h-.013Zm3.142.305v.272c0 .566-.318.903-.83.903-.513 0-.833-.337-.833-.903v-.272c0-.569.32-.904.832-.904.513 0 .83.337.83.904Zm-.337.274v-.277c0-.413-.211-.617-.494-.617-.285 0-.495.204-.495.617v.277c0 .414.21.618.495.618.283 0 .494-.204.494-.618Zm1.236-.854V6h-.333V4.285h-.584V4h1.503v.285h-.586ZM4.496 11.72h.917V12H4.165v-2h1.248v.28h-.917v.57h.862v.268h-.862v.602Zm1.489-1.16V12h-.32v-2h.294l.933 1.436h.014v-1.435h.32V12h-.292l-.936-1.44h-.013Zm2.279-.275V12H7.93v-1.715h-.584V10H8.85v.284h-.586ZM9.3 11.72h.917V12H8.97v-2h1.248v.28H9.3v.57h.863v.268H9.3v.602ZM10.47 10h.765c.42 0 .674.244.674.616a.575.575 0 0 1-.368.56l.404.824h-.373l-.36-.769h-.414V12h-.328v-2Zm.328.273v.694h.381c.245 0 .387-.115.387-.34 0-.228-.147-.354-.378-.354h-.39ZM3.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-9Z"/>
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16Zm0-1A7 7 0 1 1 8 1a7 7 0 0 1 0 14Z"/>
                              </svg></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">Absent</h6>
                              </div>
                              <div class="user-progress" style="width:450px">
                                <div class="progress">
                                  <div class="progress-bar bg-abang" role="progressbar" aria-valuenow="10"
                                  aria-valuemin="0" aria-valuemax="100" style="width:10%">
                                  </div>  
                              </div>
                              <small class="fw-semibold">10%</small>
                                
                              </div>
                            </div>
                          </li>
                          <li class="d-flex">
                            <div class="avatar flex-shrink-0 me-3">
                              <span class="avatar-initial rounded bg-kuneng"
                                ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hourglass-split" viewBox="0 0 16 16">
                                  <path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z"/>
                                </svg></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">Too Late</h6>
                              </div>
                              <div class="user-progress" style="width:450px">
                                <div class="progress">
                                  <div class="progress-bar bg-kuneng" role="progressbar" aria-valuenow="5"
                                  aria-valuemin="0" aria-valuemax="100" style="width:5%">
                                  </div>  
                              </div>
                                <small class="fw-semibold">5%</small>
                              </div>
                            </div>
                          </li>
                          
                        </ul>
                       
                   </div>
                  </div>
                                          
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                
            <!-- Order Statistics -->
            <div class="col-md-6 col-lg-4 col-xl-4 order-3 mb-4">
              <div class="card h-100">
           
              </div>
            </div>
            <!--/ Order Statistics -->
            </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-5 mb-md-4 mx-auto">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                    let clock = document.getElementById("digital-clock");
                    setInterval(() => {
                      let date = new Date();
                      clock.innerHTML = date.toLocaleTimeString();
                    }, 1000);

                    const timeElement = document.querySelector(".time");
                              const dateElement = document.querySelector(".date");

                              /**
                              * @param {Date} date
                              */
                              function formatTime(date) {
                                const hours12 = date.getHours() % 12 || 12;
                                const minutes = date.getMinutes();
                                const isAm = date.getHours() < 12;

                                return `${hours12.toString().padStart(2, "0")}:${minutes
                                  .toString()
                                  .padStart(2, "0")} ${isAm ? "AM" : "PM"}`;
                              }

                              /**
                              * @param {Date} date
                              */
                              function formatDate(date) {
                                const DAYS = [
                                  "Sunday",
                                  "Monday",
                                  "Tuesday",
                                  "Wednesday",
                                  "Thursday",
                                  "Friday",
                                  "Saturday"
                                ];
                                const MONTHS = [
                                  "January",
                                  "February",
                                  "March",
                                  "April",
                                  "May",
                                  "June",
                                  "July",
                                  "August",
                                  "September",
                                  "October",
                                  "November",
                                  "December"
                                ];

                                return `${DAYS[date.getDay()]}, ${
                                  MONTHS[date.getMonth()]
                                } ${date.getDate()} ${date.getFullYear()}`;
                              }

                              setInterval(() => {
                                const now = new Date();

                                timeElement.textContent = formatTime(now);
                                dateElement.textContent = formatDate(now);
                              }, 200);
                  </script>
                  made by SiMaK
                 
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html> 