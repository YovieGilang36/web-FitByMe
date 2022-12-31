<?php

$con=mysqli_connect('localhost','root','','fitbyme');

    $name = $_POST["name"];
    $email= $_POST["email"];
    $gender = $_POST["jenis_kelamin"];
    $tanggal = $_POST["tanggal_lahir"];
    $usia = $_POST["usia"];
    $tinggi = $_POST["tinggi_badan"];
    $berat = $_POST["berat_badan"];
    


    $sql = "UPDATE user SET email = '".$email."',password = '', jenis_kelamin = '".$gender."',tanggal_lahir = '".$tanggal."',usia = '".$usia."',tinggi_badan = '".$tinggi."',berat_badan = '".$berat."' WHERE email = '".$email."';";

    if ( mysqli_query($con, $sql) ) {
        $result["success"] = "1";
        $result["message"] = "Updating success";

        echo json_encode($result);
        mysqli_close($con);

    } else {
        $result["success"] = "0";
        $result["message"] = "error in Updating";
        echo json_encode($result);
        mysqli_close($con);
    }


?>