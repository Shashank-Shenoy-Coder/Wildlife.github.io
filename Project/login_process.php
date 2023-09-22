<?php

session_start();

include 'configure.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "POST Data: <pre>";
print_r($_POST);
echo "</pre>";

if(isset($_POST['email'])&&isset($_POST['password']))
{
    echo "Successful";
}
else
{
    echo "Unsuccessful";
}

$_SESSION['csrf'] = bin2hex(random_bytes(32));

$csrf = $_SESSION['csrf'];

$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($email && $password)) {

    $password = md5($password);

    $sql = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $sql->bind_param('ss', $email, $password);
    $sql->execute();
    $result = $sql->get_result();
    $row = $result->fetch_assoc();
    $_SESSION['uid'] = session_id();

    if (count($row) > 0) {
        echo "<script> alert('Login succesfull'); 
        window.location.href = 'user_profile.php' </script>";
    }

    else
    {
        echo "<script> alert('Login unsuccesfull'); 
        window.location.href = 'login.php' </script>";
    }


} 
// else {
//     echo "<script> alert('Enter all details'); 
//                 window.location.href = 'login.php' </script>";
// }

?>