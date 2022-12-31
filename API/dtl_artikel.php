<?php 

    $kon = new mysqli("localhost","root","","fitbyme");
    $id = (isset($_GET['id']) ? $_GET['id'] : '');

    $hasil = mysqli_query($kon, "SELECT * FROM artikel WHERE id = '$id' ");
    while($data = mysqli_fetch_array($hasil,MYSQLI_ASSOC)){

    echo json_encode($data);
    }