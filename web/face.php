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
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>SiMaK | Face</title>
  </head>
  <body>
    <style>
      .cam-btn {
        max-width: 75% !important;
        max-height: 75%;
        padding: 0 50px;
        border-radius: 40px;

        /* display: flex;
        align-items: center; */
      }
      .cam {
        padding: 50%;
        border-radius: 50%;
        background-color: #dddddd;
      }
      .title-cam p {
        width: 100%;
        position: relative;
        top: 0px;
        text-align: center;
        font-weight: 700;
        font-size: 16px;
      }
      .artc-cam p {
        max-width: 50% !important;
        position: relative;
        top: 0px;
        left: 25%;
        right: 25%;
        text-align: center !important;
        /* font-weight: 700; */
        font-size: 14px;
        word-wrap: break-word;
      }
      .btn-clckin {
        width: 100%;
        border-radius: 15px;
        padding: 0.8rem;
        font-size: 20px;
        background-color: #696cff;
        border: none;
        color: #f9f9f9;
        font-weight: 550;
        /* margin: 0px 25px; */
        font-family: "Poppins";
      }
      .btnnnn {
        overflow: hidden;
        box-sizing: border-box;
        max-width: 375px;
        clear: both;
        display: flex;
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 20px;
        padding-top: 10%;
        filter: drop-shadow(0px 10px 20px rgba(105, 108, 255, 0.6));
      }
      
    </style>
    <!-- Header -->

    <header>
      <div class="bg-head">
        <span class="back">
          <a href="#" class="icon-back-blck"
            ><i class="fa-solid fa-arrow-left"></i
          ></a>
        </span>
        <span class="about">
          <p>Face</p>
        </span>
      </div>
    </header>

    <!-- Section -->
    <section class="section1">
      <div class="cam-btn" >
           <div id="my_camera">
      </div>
      <span class="title-cam">
        <p>The camera cannot detect your face</p>
      </span>
    </section>
    <section class="section2">
      <span class="artc-cam"
        ><p>Please point your face into the photo area</p></span
      >
    </section>
    <section class="btnnnn">
      <button class="btn-clckin" type="submit">Clock In</button>
    </section>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script>
<script language="JavaScript">
  // menampilkan kamera dengan menentukan ukuran, format dan kualitas 
  Webcam.set({
      width: 300,
      height: 250,
      image_format: 'jpeg',
      jpeg_quality: 90
  });

  //menampilkan webcam di dalam file html dengan id my_camera
  Webcam.attach('#my_camera');

</script>
</html>
