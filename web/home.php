<?php 

include 'conf.php';

session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
 
 if(isset($_POST['submit'])){
    // Mengambil data dari form lalu ditampung didalam variabel
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];
    
    // Query untuk memasukan data kedalam table
    $query = mysqli_query($conn, "INSERT INTO coba VALUES (NULL,'$longitude','$latitude')");
    if($query){
        echo "<script>document.location.href='profile.php';</script>";
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
    </style>

    <!-- header -->
    <header>
      <div class="header-width">
        <div class="text">
          <div class="welcome">Welcome</div>
          <div class="username">Mas Sumbul</div>
        </div>
        <div class="img">
          <a href="#">
            <img src="assets/img/profile.jpg" alt="profile" />
          </a>
        </div>
      </div>
    </header>

    <!-- section -->
    
    <section class="time-home">
      <div class="hour">07:00</div>
      <div class="date-home">Monday, 09 Jan 2023</div>
    </section>
    
      <form class="myForm" method="post" id="contactForm" name="contactForm"
     autocomplete="off" >
    <section class="button-clockin">
      <div class="clock-in">
        <button type="submit" name="submit" class="" style="color: #fff" id="btn">
          <i
            onclick="myFunction(this)"
            class="fa-solid fa-right-to-bracket fa-3x"
          ></i>
        </button>
      </div>
    </section>

    <section class="button-section">
      <div class="container">
        <div class="button-prms">
          <div class="btn">
            <button onclick="location.href='https://google.com';">
              <i class="fa-solid fa-virus fa-lg" style="color: #fff"></i>
            </button>
          </div>
          <div class="txt">Permission</div>
        </div>
        <div class="button-hstry">
          <div class="btn">
            <button>
              <i
                class="fa-solid fa-clock-rotate-left fa-lg"
                style="color: #fff"
              ></i>
            </button>
          </div>
          <div class="txt">History</div>
        </div>
      </div>
       <div class="row">
                <div class="col-md-12 form-group mb-3">
                  <input type="hidden" class="form-control" name="longitude" id="longitude">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group mb-3">
                  <input type="hidden" class="form-control" name="latitude"  id="latitude">
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
