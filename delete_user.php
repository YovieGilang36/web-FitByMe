<?php
require('koneksi.php');

    $email = $_GET["delete"];

    $hapus = mysqli_query($kon, "DELETE FROM user WHERE email = '$email' ");

    if ($hapus) {
        echo "<script type='text/javascript'>
        alert('Data deleted successfully!');
        location.replace('user.php');
        </script>";
    }else{
        echo "<script type='text/javascript'>
        alert('Data failed to delete!');
        location.replace('user.php');
        </script>";
    }
