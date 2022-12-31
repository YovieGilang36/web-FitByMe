<?php
$con=mysqli_connect('localhost','root','','fitbyme');

$query = $con->query("SELECT * FROM workout WHERE tanggal_input = '2022-12-30'");
$result = array();

if($query){
    while($row = mysqli_fetch_assoc($query)){
        $result[] = $row;
    }
    echo json_encode($result);
}
?>