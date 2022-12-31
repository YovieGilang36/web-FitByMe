<?php
require('koneksi.php');

    $id = $_GET["delete"];
    $i = mysqli_query($kon, "SELECT gambar FROM resep WHERE id ='$id' ");
    $u =mysqli_fetch_array($i);

    if(is_file("upload/".$u['gambar'])) unlink("upload/".$u['gambar']); 

    $hapus = mysqli_query($kon, "DELETE FROM resep WHERE id ='$id' ");
     if($hapus){
        echo "<script type='text/javascript'>
            alert('Data deleted successfully!');
            location.replace('nutrisi.php');
            </script>";
        }else{
            echo "<script type='text/javascript'>
            alert('Data failed to delete!');
            location.replace('nutrisi.php');
            </script>";
        }


?>




