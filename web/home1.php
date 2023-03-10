<?php 
$t=time();
date_default_timezone_set('Asia/Jakarta');
$date = date('h:i');

include 'conf.php';
session_start();
 
if (!isset($_SESSION['nis'])) {
    header("Location: login1.php");
}
 
 if(isset($_POST['submit1'])){
    // Mengambil data dari form lalu ditampung didalam variabel
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $no_absen = $_POST['no_absen'];
    $status = $_POST['status'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    
    // Query untuk memasukan data kedalam table
    $query = mysqli_query($conn, "INSERT INTO clockin VALUES (NULL,$nis,'$nama','$kelas',$no_absen,NULL,NULL,'$status','$latitude','$longitude',null)");
    var_dump($no_absen);
    if($query){
        echo" <script type='text/javascript'>alert('Berhasil absen');</script>";
        echo "<script>document.location.href='clockout.php';</script>";   
    }else{
        echo"gagal";
    }     
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <title>SiMaK | Clock In</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Krona+One&family=Poppins&display=swap"
      rel="stylesheet"
    />

    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <!-- <link rel="stylesheet" href="assets/css/style.css" /> -->
  </head>

  <body onload="getLocation();">
    <style>
      body {
        background: #f9f9f9;
        margin: 0;
        max-width: 375px;
      }

      header {
        /* max-width: 375px; */
        height: 90%;
        display: inline;
      }

      .header-width {
        max-width: 375px;
        padding: 32px 20px 0 20px;
        margin: 0 auto;
        display: flex;
      }

      .text {
        width: 50%;
      }

      .img {
        width: 50%;
        direction: rtl;
        padding-top: 1.5%;
      }

      .img a img {
        max-width: 40px;
        max-height: 40px;
        /* position: absolute; */
        /* top: 25px; */
        /* right: 20px; */
        border-radius: 50%;
      }

      .welcome {
        padding-bottom: 5px;
        font-size: 14px;
        color: black;
        font-weight: 400;
      }

      .username {
        font-size: 16px;
        font-family: "Poppins", sans-serif;
        font-weight: 600;
        color: black;
      }

      .time-home {
        max-width: 375px;
        padding: 0px 20px;
        margin: 0 auto;
        padding-top: 10%;
        /* display: block; */
      }

      .hour {
        text-align: center;
        font-family: Poppins;
        font-size: 40px;
        font-weight: 800;
      }

      .date-home {
        text-align: center;
        font-family: Poppins;
        font-size: 20px;
        font-weight: 500;
      }

      .button-clockin {
        padding-top: 32px;
        padding-left: 26%;
        /* padding-right: 45%; */
      }

      .button-clockin .clock-in button {
        padding: 63px;
        border-radius: 30px;
        background: #ff6969;
        border: 0px;
      }

      .button-section {
        max-width: 375px;
        /* padding: 0px 20px; */
        margin: 0 auto;
        padding-top: 10%;
      }

      .container {
        display: flex;
      }

      .button-prms {
        width: 50%;
      }

      .button-hstry {
        width: 50%;
      }

      .btn {
        display: flow-root;
      }

      .button-prms button {
        padding: 15px 15px;
        border-radius: 15px;
        background-color: #696cff;
        border: 0px;
      }

      .button-hstry button {
        padding: 15px 16px;
        border-radius: 15px;
        background-color: #696cff;
        border: 0px;
      }

      .button-section .txt {
        text-align: center;
        font-size: 14px;
        font-family: Poppins;
        font-weight: 600;
      }
      
      .clckin {
        text-align: center;
        font-weight: 700;
        font-family: "Poppins";
        font-size: 18px;
        position: relative;
        right: 20%;
        margin-top: 10px;
      }
    </style>

    <!-- header -->
    <header>
          <?php
        $tampilPeg    =mysqli_query($conn, "SELECT * FROM data_siswa WHERE nis='$_SESSION[nis]'");
        $peg    =mysqli_fetch_array($tampilPeg);
    ?>
      <div class="header-width">
        <div class="text">
          <div class="welcome">Welcome</div>
          <div class="username"> <?=$peg['nama']?></div>
        </div>
        <div class="img">
          <a href="profile.php">
            <img src="assets/img/profile.jpg" alt="profile" />
          </a>
        </div>
      </div>
    </header>

    <!-- section -->
    
    <section class="time-home">
      <div class="hour"><?php echo $date ;?></div>
      <div class="date-home">Monday, <?php echo(date("Y-m-d",$t));?></div>
    </section>
    
      <form class="myForm" method="post" id="contactForm" name="contactForm"
     autocomplete="off" >
    <section class="button-clockin">
      <div class="clock-in">
        <button type="submit" name="submit1" class="" style="color: #fff" id="btn">
          <i
            onclick="myFunction(this)"
            class="fa-solid fa-right-to-bracket fa-3x"
          ></i>
        </button>
        <p class="clckin">Clock In</p>
      </div>
    </section>

    <section class="button-section">
      <div class="container">
        <div class="button-prms">
          <div class="btn">
          <a class="btn-prof" href="permission.php" target="blank">
              <button >
                <i class="fa-solid fa-virus fa-lg" style="color: #fff"></i>
            </button>
          </a>
              </div>
          <div class="txt">Permission</div>
        </div>
        <div class="button-hstry">
            <a class="btn-prof" href="history.php">
          <div class="btn">
            <button>
              <i
                class="fa-solid fa-clock-rotate-left fa-lg"
                style="color: #fff"
              ></i>
            </button>
          </div>
             </a>
          <div class="txt">History</div>
        </div>
      </div>
       <div class="row">
                <div class="col-md-12 form-group mb-3">
                    <input type="hidden" class="form-control" name="nis"  id="nis" value="<?=$peg['nis']?>">
                    <input type="hidden" class="form-control" name="nama"  id="nama" value="<?=$peg['nama']?>">
                     <input type="hidden" class="form-control" name="kelas"  id="kelas" value="<?=$peg['kelas']?>">
                     <input type="hidden" class="form-control" name="no_absen"  id="no_absen"value="<?=$peg['no_absen']?>">
                     
                     <input type="hidden" class="form-control" name="status"  id="status" value="present">
                     
                  <input type="hidden" class="form-control" name="latitude" id="latitude">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group mb-3">
                  <input type="hidden" class="form-control" name="longitude"  id="longitude">
                </div>
              </div>
 
    </section>
    </form>
     <script type="text/javascript">
              function getLocation(){
                if(navigator.geolocation){
                  navigator.geolocation.getCurrentPosition(showPosition);
                }
              }
              function showPosition(position){
                document.querySelector('.myForm input[name="latitude"]').value = position.coords.latitude;
                document.querySelector('.myForm input[name="longitude"]').value = position.coords.longitude;
              }
              function showError(error){
                switch(error.code){
                  case error.PERMISSION_DENIED:
                  alert("you must allow the request for geolocation to fill");
                  location.reload();
                  break;
                }
              }
            </script>
       
    <script type="text/javascript">
      const btn = document.getElementById("btn");

      btn.addEventListener("click", function onClick() {
        btn.style.background = "#FFB169";
      });
      // function myFunction(x) {
      //   x.classList.toggle("fa-right-from-bracket");
      // }
    </script>
  </body>
</html>