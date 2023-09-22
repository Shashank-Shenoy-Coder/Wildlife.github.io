<?php

session_start();
include 'configure.php';

if(isset($_POST['email'])&&isset($_POST['password']))
{
    echo "Set";
}
else
{
    echo "Not Set";
}

$mail=$_POST['email'];
$pass=$_POST['password'];

if(!empty($mail && $pass))
{
    $sql = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $sql->bind_param('ss', $email, $password);
    $sql->execute();
    $result = $sql->get_result();
    $row = $result->fetch_assoc();
    echo "<script> alert('Login succesfull'); 
        window.location.href = 'user_profile.php' </script>";
}
else
{
    echo "<script> alert('Enter all details'); 
              window.location.href = 'login.php' </script>";
}

?>