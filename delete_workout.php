<?php
include 'koneksi.php';

    $id = $_GET["delete"];
        $i = mysqli_query($kon, "SELECT vidio FROM workout WHERE id ='$id' ");
        $u =mysqli_fetch_array($i);

        if(is_file("vidio/".$u['vidio'])) unlink("vidio/".$u['vidio']); 
        $hapus = mysqli_query($kon, "DELETE FROM workout WHERE id='$id' ");
        if($hapus){
            echo "<script type='text/javascript'>
            alert('Data deleted successfully!');
            location.replace('workout.php');
            </script>";
        }else{
            echo "<script type='text/javascript'>
            alert('Data failed to delete!');
            location.replace('workout.php');
            </script>";
        }
?>