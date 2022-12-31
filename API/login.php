<?php 
  $con=mysqli_connect('localhost','root','','fitbyme');
  //Received JSON into $json variable
  $json = file_get_contents('php://input');
  
  //Decoding the received JSON and store into $obj variable.
  $obj = json_decode($json,true);
  
  if(isset($obj["email"]) && isset($obj["password"])){
    
    $email = mysqli_real_escape_string($con,$obj['email']);
    $pass = mysqli_real_escape_string($con,$obj['password']);
    
    //Declare array variable
    $result=[];
    
    //Select Query
    $sql="SELECT * FROM user WHERE email='{$email}' and password='{$pass}'";
    $res=$con->query($sql);
    
    if($res->num_rows>0){
      
      $row=$res->fetch_assoc();
      
      $result['loginStatus']=true;
      $result['message']="Login Successfully";
      
      $result["userInfo"]=$row;
      
    }else{
      
      $result['loginStatus']=false;
      $result['message']="Invalid Login Details";
    }
    
    // Converting the array into JSON format.
    $json_data=json_encode($result);
      
    // Echo the $json.
    echo $json_data;
  }
?>

<?php
//  $db = mysqli_connect('localhost','root','','fitbyme');
//  $email= $_POST['email'];
//  $password = md5($_POST['password']);
//  $sql = "SELECT * From user inner join jadwal on user.id_user=jadwal.id_user Where user.id_level = 2 and user.username = '".$username."' ";
//  $result = mysqli_query($db,$sql);



//  if(mysqli_num_rows($result) > 1){
//     $row = mysqli_fetch_assoc($result);
//     $passwordVal = $row["password"];
//     $rows = array();

//     if(md5($passwordVal) != $password) {
//         http_response_code(404);
//         $response =  json_encode([
//             "success" => false,
//             "message" => "Password anda salah",
//             "data" => null,
//         ]);

//         echo $response;
//     } else {
//         http_response_code(200);

        
//             while ($r = mysqli_fetch_assoc($result)) {
//                 $rows[] = $r;
//             }
//             print json_encode([
//         "success" => true,
//         "message" => "sukses",
//         "data" => null,
//             $rows]);

//     }
//  } 
//  else{
//     http_response_code(404);
//  	echo json_encode([
//         "success" => false,
//         "message" => "Akun tidak ditemukan",
//         "data" => null
//     ]);
//  }
 
  // $db = mysqli_connect('localhost','root','','fitbyme');
  // if(!$db){
  //   echo "Database connection faild";
  // }
  // $email = $_POST['email'];
  // $password = $_POST['password'];

  // $sql="SELECT * FROM user WHERE email='".$email."' and password='".$password."'";
  // $result = mysqli_query($db, $sql);
  // $count = mysqli_num_rows($result);

  // if($count == 1){
  //   echo json_encode("Error");
  // }else{
  //   $insert = "INSERT INTO user(email, password, nama)VALUES('".$email."','".$password."', '".$name."')";
  //   $query = mysqli_query($db, $insert);
  //   if($query){
  //     echo json_encode("Success");
  //   }
  // }
?>