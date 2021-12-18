<?php
include'conf.php';

$server = 'localhost';
$username = 'root';
$pass = '';
$db="xelp";
            

$con=mysqli_connect('localhost','root','','xelp');
if(!$con){
    echo"connection failed";
}
if (isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
    if($sql){
        header('location:http://www.omdbapi.com');
    }else{
        echo"wrong username or password ";
    }

}
?>