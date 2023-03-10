<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="<?php echo base_url(); ?>/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Data Recap Admin | SiMaK</title>

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
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
        
    <link rel="stylesheet"  href="<?php echo base_url(); ?>/assets/css/style.css">
    <link rel="stylesheet"  href="<?php echo base_url(); ?>/assets/css/simple-datatables.css">

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?php echo base_url(); ?>/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?php echo base_url(); ?>/assets/js/config.js"></script>
   
  </head>

  <body class="datarecapadmin">
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="logo">
            <a href="<?= base_url() ?>index.php/user/adminHome" class="app-brand-link">
              <img src="<?php echo base_url(); ?>/assets/img/icons/logo/logo.png" alt class="w-px-100  ms-4 my-4" />
              <!-- <span class="app-brand-text demo menu-text text-none fw-bolder ms-2">SiMaK</span> -->
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="<?= base_url() ?>index.php/user/adminHome" class="menu-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door my-auto me-3" viewBox="0 0 16 16">
                  <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
                </svg>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- Tables -->
            <!-- <li class="menu-item">
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
            </li> -->
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
            <li class="menu-item active">
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
            <!-- <li class="menu-item">
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
            <li class="menu-item">
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
                  <span class="form-control border-0 shadow-none ms-2 fs-5">
                  <a href="<?php echo base_url(); ?>index.php/user/table" class="link-secondary">
                  Data Recapulation
                  </a>
                </span></div>
               </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-2">
                  <h6 class="mb-0">Gilang Wahyu</h6>
                </li>

                <!-- User -->
                
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      
                      <img src="<?php echo base_url(); ?>/assets/img/avatars/profile.svg" alt class="w-px-40 h-auto rounded-circle" />
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
                            <span class="fw-semibold d-block">Gilang Wahyu</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
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
            <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">All</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Class X</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Class XI</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Class XII</a>
                </li>
            </ul>
            <div class="row justify-content-evenly btndata">
                    <div class="col-4">
                   <a href="<?php echo base_url(); ?>index.php/user/tambahdata" class="btn btn-primary pull-right position-absolute bottom-0 end-0 me-25  mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer me-2" viewBox="0 0 16 16">
                      <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                      <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
                    </svg>Print</a>
                    </div>
                </div> 
            <br>
              <!-- Bordered Table -->
              <div class="card">
                <div class="card-body pt-0">
                <div class="dataTables3_length" id="table3_length">

                  <div class="dropdown">
                    <button class="btn btn-outline-secondary btn-sm dropdown-toggle gradebtn pe-45 ps-3  text-start" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel-fill " viewBox="0 0 16 16">
                      <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z"/>
                    </svg>
                      Grade
                    </button>
                    <ul class="dropdown-menu grade">
                      <li><a class="dropdown-item" href="#">RPL A</a></li>
                      <li><a class="dropdown-item" href="#">RPL B</a></li>
                      <li><a class="dropdown-item" href="#">RPL C</a></li>
                      <li><a class="dropdown-item" href="#">TKJ A</a></li>
                      <li><a class="dropdown-item" href="#">TKJ B</a></li>
                      <li><a class="dropdown-item" href="#">TKJ C</a></li>
                      <li><a class="dropdown-item" href="#">DG A</a></li>
                      <li><a class="dropdown-item" href="#">DG B</a></li>
                      <li><a class="dropdown-item" href="#">DG C</a></li>
                      <li><a class="dropdown-item" href="#">DG D</a></li>
                      <li><a class="dropdown-item" href="#">LOG A</a></li>
                      <li><a class="dropdown-item" href="#">LOG B</a></li>
                      <li><a class="dropdown-item" href="#">LOG C</a></li>
                      <li><a class="dropdown-item" href="#">MEKA A</a></li>
                      <li><a class="dropdown-item" href="#">MEKA B</a></li>
                      <li><a class="dropdown-item" href="#">MEKA C</a></li>
                      <li><a class="dropdown-item" href="#">PH A</a></li>
                      <li><a class="dropdown-item" href="#">PH B</a></li>
                      <li><a class="dropdown-item" href="#">PH C</a></li>
                      <li><a class="dropdown-item" href="#">PD A</a></li>
                      <li><a class="dropdown-item" href="#">PD B</a></li>
                      <li><a class="dropdown-item" href="#">PD C</a></li>
                    </ul>
                  </div>
                  
                  <div class="row justify-content-evenly btndata">
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary gradebtn btn-sm dropdown-toggle pull-right position-absolute bottom-0 end-0 pe-5 py-1 me-8 mb-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Weekly
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">1st week</a></li>
                          <li><a class="dropdown-item" href="#">2nd week</a></li>
                          <li><a class="dropdown-item" href="#">3rd week</a></li>
                          <li><a class="dropdown-item" href="#">4th week</a></li>
                        </ul>
                      </div>
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary btn-sm dropdown-toggle pull-right position-absolute bottom-0 end-0 gradebtn pe-5 py-1 me-25 mb-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Month
                        </button>
                        <ul class="dropdown-menu grade">
                          <li><a class="dropdown-item" href="#">January</a></li>
                          <li><a class="dropdown-item" href="#">February</a></li>
                          <li><a class="dropdown-item" href="#">March</a></li>
                          <li><a class="dropdown-item" href="#">April</a></li>
                          <li><a class="dropdown-item" href="#">May</a></li>
                          <li><a class="dropdown-item" href="#">June</a></li>
                          <li><a class="dropdown-item" href="#">July</a></li>
                          <li><a class="dropdown-item" href="#">August</a></li>
                          <li><a class="dropdown-item" href="#">September</a></li>
                          <li><a class="dropdown-item" href="#">October</a></li>
                          <li><a class="dropdown-item" href="#">November</a></li>
                          <li><a class="dropdown-item" href="#">December</a></li>
                          </ul>
                      </div>
                    
                  </div>
                  
                </div>
                
                  
                  <div class="table-responsive text-nowrap mb-1">
                    <table id="table1" class="table table-bordered">
                      <thead>
                        <tr align="center">
                          <th rowspan="2" style="line-height: 55px;">No</th>
                          <th rowspan="2" style="line-height: 55px;">NIS</th>
                          <th rowspan="2" style="line-height: 55px;">Nama</th>
                          <th rowspan="2" style="line-height: 55px;">Kelas</th>
                          <th>Mon</th>
                          <th>Tues</th>
                          <th>Wed</th>
                          <th>Thurs</th>
                          <th>Frid</th>
                          <th>Sat</th>
                          <th>Sun</th>
                        </tr>
                        <tr align="center">
                          <th>1</th>
                          <th>2</th>
                          <th>3</th>
                          <th>4</th>
                          <th>5</th>
                          <th>6</th>
                          <th>7</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr align="center">
                          <td>1</td>
                          <td>212821557065</td>
                          <td>Damar Radhitya</td>
                          <td>XII RPL C</td>
                          <td class="bg-ijo"></td>
                          <td class="bg-ijo"></td>
                          <td class="bg-ijo"></td>
                          <td class="bg-ijo"></td>
                          <td class="bg-ijo"></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr align="center">
                          <td>2</td>
                          <td>212921567065</td>
                          <td>Hikmah</td>
                          <td>XII RPL C</td>
                          <td class="bg-ijo"></td>
                          <td class="bg-ijo"></td>
                          <td class="bg-ijo"></td>
                          <td class="bg-ijo"></td>
                          <td class="bg-kuneng"></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr align="center">
                        <td>3</td>
                          <td>212911566065</td>
                          <td>Gilang</td>
                          <td>XII RPL C</td>
                          <td class="bg-ijo"></td>
                          <td class="bg-ijo"></td>
                          <td class="bg-ijo"></td>
                          <td class="bg-abang"></td>
                          <td class="bg-ijo"></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr align ="center">
                        <td>4</td>
                          <td>212891564065</td>
                          <td>Firda</td>
                          <td>XII RPL C</td>
                          <td class="bg-ijo"></td>
                          <td class="bg-ijo"></td>
                          <td class="bg-abang"></td>
                          <td class="bg-kuneng"></td>
                          <td class="bg-ijo"></td>
                          <td></td>
                          <td></td>
                        </tr>
                      </tbody>
                      
                    </table>
                    <td></td>
                   
                  </div>
                </div>
              </div>
              <!--/ Bordered Table -->

              <hr class="my-5" />

            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-5 mb-md-4 mx-auto">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
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
    <script src="<?php echo base_url(); ?>/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?php echo base_url(); ?>/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="<?php echo base_url(); ?>/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/datatables.js"></script>
  </body>
</html>