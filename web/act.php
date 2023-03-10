<?php
ob_start();
session_start();
    include "conf.php";
    $nis       = mysqli_real_escape_string($conn, $_POST['nis']);
    $password        = mysqli_real_escape_string($conn, md5($_POST['password']));
    $op             = $_GET['op'];

    if($op=="in"){
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE nis='$nis' AND password='$password'");
        if(mysqli_num_rows($sql)==1){
            $qry = mysqli_fetch_array($sql);
            $_SESSION['id_siswa']    = $qry['id_siswa'];
            $_SESSION['nama']    = $qry['nama'];
            $_SESSION['nis']    = $qry['nis'];
            $_SESSION['pass']    = $qry['pass'];
            $_SESSION['grade']    = $qry['grade'];
            $_SESSION['jurusan']    = $qry['jurusan'];
            $_SESSION['kelas']    = $qry['kelas'];
            $_SESSION['no_aben']    = $qry['no_absen'];
            $_SESSION['jenis_kelamin']    = $qry['jenis_kelamin'];
            $_SESSION['gambar']    = $qry['gambar'];
            
           
        }
        else{
            ?>
            <script language="JavaScript">
                alert('Oops! Login Failed. Username & password tidak sesuai ...');
                document.location='./';
            </script>
            <?php
        }
    }
   
?>