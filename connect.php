<?php 
$email = $_POST['email-id'];
$password = $_POST['password'];

$conn = new mysqli('localhost','root','test');
if($conn->connect_error){
     die('Connection Failed : '.$conn->connect_error);

}else{

     $stmt = $conn->prepare("insert into signup(email,password) values(?,?)");
     $stmt->bind_param("sssssi",$email,$password);
     $stmt->execute();
     echo "Signup Sucessfully...";
     $stmt->close();
     $conn->close();
}









?>