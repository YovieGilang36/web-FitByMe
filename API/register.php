<?php

$con=mysqli_connect('localhost','root','','fitbyme');

    $name = isset($_POST["name"]) ? $_POST["name"] : '';
    $email= isset($_POST["email"]) ? $_POST["email"] : '';
    $password = isset($_POST["password"]) ? $_POST["password"] : '';
    $gender = isset($_POST["jenis_kelamin"]) ? $_POST["jenis_kelamin"] : '';
    $usia = isset($_POST["usia"]) ? $_POST["usia"] : '';
    $tinggi = isset($_POST["tinggi_badan"]) ? $_POST["tinggi_badan"] : '';
    $berat = isset($_POST["berat_badan"]) ? $_POST["berat_badan"] : '';;
    

$findexist="select * from user where nama='$name'";

        $resultsearch=mysqli_query($con,$findexist);
    if(mysqli_num_rows($resultsearch)>0)
    {
           while($row=mysqli_fetch_array($resultsearch))
          {
              $result["success"] = "3";
              $result["message"] = "user Already exist";

              echo json_encode($result);
              mysqli_close($con);
          }
  }
else{

    $sql = "INSERT INTO user (email,password,nama,jenis_kelamin,usia,tinggi_badan,berat_badan) VALUES ('$email','$password','$name','$gender','$usia','$tinggi','$berat');";

    if ( mysqli_query($con, $sql) ) {
        $result["success"]=true;
        $result["message"] = "Registration success";

        echo json_encode($result);
        mysqli_close($con);

    } else {
        $result["success"]=false;
        $result["message"] = "error in Registration";
        echo json_encode($result);
        mysqli_close($con);
    }
}

?>
