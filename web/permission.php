<?php 

include 'conf.php';

session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: login1.php");
}
 
 if(isset($_POST['submit'])){
    // Mengambil data dari form lalu ditampung didalam variabel
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $no_absen = $_POST['no_absen'];
    $status = $_POST['status'];
    // Query untuk memasukan data kedalam table
    $query = mysqli_query($conn, "INSERT INTO clockin VALUES (NULL,$nis,'$nama','$kelas',$no_absen,NULL,NULL,'$status',NULL,NULL,NULL)");
    if($query){
        echo "<script>document.location.href='history.php';</script>";
    }     
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      href="https://fonts.googleapis.com/css2?family=Krona+One&family=Poppins&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
  </head>
  <body>
    <style>
      body {
        background: #f9f9f9;
        margin: 0;
        max-width: 375px;
      }

      header {
        height: 90%;
        display: inline;
        /* justify-content: space-between; */
      }

      .inner-width {
        max-width: 375px;
        padding: 0 20px;
        margin: 0 auto;
      }

      .icon-back {
        float: left;
        padding-top: 32px;
        text-decoration: none;
        color: black;
      }

      .menu {
        float: right;
        display: flex;
        align-items: center;
        position: absolute;
      }

      .menu ul {
        list-style: none;
        position: relative;
        margin-top: 10%;
        margin-left: 65%;
      }

      .menu ul p {
        font-family: Poppins;
        font-weight: 600;
      }

      .name-input {
        overflow: hidden;
        box-sizing: border-box;
        max-width: 375px;
        clear: both;
        display: flex;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 15%;
      }

      .input-container {
        width: 305px;
        position: relative;
      }

      .label {
        position: absolute;
        left: 10px;
        top: 14px;
        transition: all 0.2s;
        padding: 3px;
        z-index: 1;
        color: black;
        font-size: 14px;
        font-family: Poppins;
      }

      .text-input {
        padding: 0.8rem;
        width: 100%;
        height: 100%;
        border: 1px solid black;
        border-radius: 15px;
        background-color: transparent;
        font-size: 16px;
        font-family: Poppins;
        font-weight: 600;
        outline: none;
        transition: all 0.3s;
        color: black;
      }

      .label::before {
        content: "";
        height: 5px;
        background-color: #f9f9f9;
        position: absolute;
        left: 0;
        top: 10px;
        width: 100%;
        z-index: -1;
      }

      .text-input:focus {
        border: 1px solid #696cff;
      }

      .text-input:focus + .label,
      .filled {
        top: -10px;
        color: #696cff;
        font-size: 14px;
      }

      .text-input::placeholder {
        font-size: 16px;
        opacity: 0;
        transition: all 0.3s;
      }

      .text-input:focus::placeholder {
        opacity: 1;
        animation-delay: 0.2s;
      }

      .nis-input {
        overflow: hidden;
        box-sizing: border-box;
        max-width: 375px;
        clear: both;
        display: flex;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 3%;
      }

      .grade-num-input {
        overflow: hidden;
        box-sizing: border-box;
        max-width: 375px;
        clear: both;
        display: flex;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 3%;
      }

      .grade-num-input .input-container {
        width: 135px;
        position: relative;
        display: inline-block;
      }

      .grade-num-input .input-container-grade {
        width: 135px;
        position: relative;
        display: inline-block;
        padding-right: 30px;
      }

      .permission-input {
        overflow: hidden;
        box-sizing: border-box;
        max-width: 375px;
        clear: both;
        display: flex;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 3%;
      }

      .input-file {
        overflow: hidden;
        box-sizing: border-box;
        max-width: 375px;
        clear: both;
        display: flex;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 3%;
      }

      #custom-button {
        padding: 10px;
        color: white;
        background-color: #ffb169;
        border: 1px solid black;
        border-radius: 15px;
        cursor: pointer;
        font-family: Poppins;
        font-size: 14px;
      }

      #custom-button:hover {
        background-color: #ffb169;
      }

      #custom-text {
        margin-left: 10px;
        font-family: Poppins;
        color: #1e1e1e;
        margin-top: 10px;
        font-size: 14px;
        font-weight: 600;
      }

      .section-button {
        overflow: hidden;
        box-sizing: border-box;
        max-width: 375px;
        clear: both;
        display: flex;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 3%;
      }

      .button {
        width: 100%;
        /* cursor: pointer; */
      }

      .button-form {
        padding: 10px 131px;
        width: 100%;
        border-radius: 15px;
        border: 1px solid black;
        background: #696cff;
        font-size: 20px;
        font-family: Poppins;
        font-weight: 600;
        color: white;
        cursor: pointer;
      }
    </style>

    <!-- Header -->

    <header>
      <div class="inner-width">
        <a href="#" class="icon-back"><i class="fa-solid fa-arrow-left"></i></a>
        <nav class="menu">
          <ul>
            <li><p>Permission</p></li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- Section -->

<form action="profile.html" method="post">

    <section class="name-input">
        <div class="input-container">
          <input
            type="text"
            id="username"
            name="nis"
            autocomplete="off
            "
            placeholder=""
            required
            class="text-input"
          />
          <label for="name" class="label">NIS</label>
        </div>
    </section>

    <section class="nis-input">
        <div class="input-container">
          <input
            type="text"
            id="nis"
            name="nama"
            autocomplete="off
            "
            placeholder=""
            required
            class="text-input"
          />
          <label for="name" class="label">nama</label>
        </div>
    </section>

    <section class="grade-num-input">
        <div class="input-container input-container-grade">
          <input
            type="text"
            id="grade"
            name="kelas"
            autocomplete="off
            "
            placeholder=""
            required
            class="text-input"
          />
          <label for="name" class="label">Grade</label>
        </div>
        <div class="input-container">
          <input
            type="text"
            id="serial-number"
            autocomplete="off"
            name="no_absen"
            placeholder=""
            required
            class="text-input"
          />
          <label for="name" class="label">Number</label>
        </div>
    </section>

    <section class="permission-input">
        <div class="input-container">
          <input
            type="text"
            name="status"
            autocomplete="off"
            value="permission"
            placeholder=""
            required
            class="text-input"
          />
          <label for="name" class="label">Status</label>
        </div>
    </section>

    <!--<section>-->
    <!--  <form action="">-->
    <!--    <div class="input-file">-->
    <!--      <input type="file" id="real-file" hidden="hidden" />-->
    <!--      <button type="button" id="custom-button">-->
    <!--        <i class="fa-solid fa-file" style="padding-right: 10px"></i>Choose a-->
    <!--        File-->
    <!--      </button>-->
    <!--      <span id="custom-text">No file chosen, yet.</span>-->
    <!--    </div>-->
    <!--  </form>-->
    <!--</section>-->

    <section class="section-button">
      <div class="button">
        <button type="submit" name="submit" class="button-form">Submit</button>
      </div>
    </section>
 </form>


    <!-- script -->
    <script type="text/javascript">
      const realFileBtn = document.getElementById("real-file");
      const customBtn = document.getElementById("custom-button");
      const customTxt = document.getElementById("custom-text");

      customBtn.addEventListener("click", function () {
        realFileBtn.click();
      });

      realFileBtn.addEventListener("change", function () {
        if (realFileBtn.value) {
          customTxt.innerHTML = realFileBtn.value.match(
            /[\/\\]([\w\d\s.\-\(\)]+)$/
          )[1];
        } else {
          customTxt.innerHTML = "No file chosen, yet";
        }
      });
    </script>
  </body>
</html>
