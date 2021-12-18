<?php
$server = 'localhost';
$username = 'root';
$pass = '';
$db="xelp";
            

$con=mysqli_connect('localhost','root','','xelp');
if(!$con){
    echo"connection failed";
}

if (isset($_POST['signup'])){
$username=($_POST['username']);
$email=($_POST['email']);
$password=($_POST['password']);

$sql= "INSERT INTO users (username,email,password) VALUES ('$username','$email','$password')";
$result= mysqli_query($con,$sql);
if($result){
    echo "<h4>Now you can Login</h4>";
}else{
echo "something went wrong";
}
}

?>
