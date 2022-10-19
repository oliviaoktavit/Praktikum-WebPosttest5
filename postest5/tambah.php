<?php

require 'config.php';
if (isset($_POST['Sign-up'])) {
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $phone = $_POST['phone'];
    $dte = $_POST['dte'];
    $pwd = $_POST['pwd'];


    $kirim = mysqli_query($db, "INSERT INTO  signup (email,fname,phone,dte,pwd) VALUES ('$email', '$fname', '$phone','$dte','$pwd')");

    if ($kirim) {
        echo "<script> alert('Data Berhasil Dikirim');</script>";
        header("Location:db.php");
    } else {
        echo "gagal mengirim";
    }
}
