<?php 

	
$con=mysqli_connect('localhost','root','','fitbyme');

	$query = $con->query("SELECT * FROM workout");
	$result = array();

	if($query){
		while($row = mysqli_fetch_assoc($query)){
			$result[] = $row;
		}
		echo json_encode($result);
	}
// class Constants{
// 	static $DB_SERVER="localhost";
// 	static $DB_NAME= "fitbyme";
// 	static $USERNAME="root";
// 	static $PASSWORD="";

// 	static $SQL_SELECT_ALL="SELECT * FROM workout";
// }

// class Artikel{
// 	public function connect(){
// 		$con=new mysqli(Constants::$DB_SERVER,Constants::$USERNAME,Constants::$PASSWORD,Constants::$DB_NAME);
// 		if($con->connect_error){
// 			return null;
// 		}else{
// 			return $con;
// 		}
// 	}

// 	public function select(){
// 		$con=$this->connect();
// 		if($con != null){
// 			$result=$con->query(Constants::$SQL_SELECT_ALL);
// 			if($result->num_rows>0){
// 				$vidio=array();
// 				while($row=$result->fetch_array()){
// 					array_push($vidio, array("id"=>$row['id'], "vidio"=>$row['vidio'],
// 					"judul"=>$row['judul'], "durasi"=>$row['durasi'], "deskripsi"=>$row['deskripsi'], "oleh"=>$row['oleh'], "gambar"=>$row['gambar']));
// 				}
// 				print(json_encode(array_reverse($vidio)));
// 			}else{
// 				print(json_encode(array("PHP EXCEPTION : CAN'T RETRIEVE FROM MYSQL. ")));
// 			}
// 			$con->close();
// 		}else{
// 			print(json_encode(array("PHP EXCEPTION : CAN'T CONNECT TO MYSQL. NULL CONNECTION.")));
// 		}
// 	}
// }
// $vidio=new Vidio();
// $vidio->select();
?>


	