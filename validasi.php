<?php
include('connect.php');

if(isset($_POST['submit'])){

    $email = $_POST['uname'];
    $pass = $_POST['psw'];

    $sql = "SELECT * FROM `user` WHERE email_user = '$email' AND password_user = '$pass';";
    $hasil = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_array($hasil, MYSQLI_ASSOC);
    $jum = mysqli_num_rows($hasil);

    if($jum == 1){
        echo "<script>
        window.location.href = 'home_page.php';
        alert('Login berhasil');</script>";
    }else{
        echo "<script>
        window.location.href = 'tibusid.php';
        alert('Login gagal, coba lagi');</script>";
    }
}
?>