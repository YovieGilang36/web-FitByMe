<?php

$db=mysqli_connect('localhost','root','','fitbyme');

$name = isset($_POST["nama"]) ? $_POST["nama"] : '';
$email= isset($_POST["email"]) ? $_POST["email"] : '';
$password = isset($_POST["password"]) ? $_POST["password"] : '';
$gender = isset($_POST["jenis_kelamin"]) ? $_POST["jenis_kelamin"] : '';
$usia = isset($_POST["usia"]) ? $_POST["usia"] : '';
$tinggi = isset($_POST["tinggi_badan"]) ? $_POST["tinggi_badan"] : '';
$berat = isset($_POST["berat_badan"]) ? $_POST["berat_badan"] : '';


$sql = "SELECT * FROM user WHERE email='$email'";
$result = mysqli_query($db,$sql);
$count = mysqli_num_rows($result);
if($count == 1){
	echo json_encode("Error");
}else{
	$insert = "UPDATE user SET nama ='$name', jenis_kelamin='$gender', usia='$usia',  tinggi_badan='$tinggi',  berat_badan='$berat' WHERE email='$email'";
		$query = mysqli_query($db,$insert);
		if($query){
			echo json_encode("Success");
		}
}

?>
