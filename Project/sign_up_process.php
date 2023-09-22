<?php

include 'configure.php';

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if(!empty($first_name && $last_name && $email && $gender && $phone_number && $password && $cpassword))
    {
        if($password == $cpassword)
        {
            $password = md5($password);
            $cpassword = md5($cpassword);
            $sql = "SELECT email FROM users WHERE email='$email'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0)
            {
                echo "<script>alert('You have already signed up')
                location.href = 'login.php'</script>";
            }
            else
            {
                $ins = "INSERT INTO users(first_name,last_name,email,gender,phone_number,password) VALUES ('$first_name','$last_name','$email','$gender','$phone_number','$password')";
                $res = mysqli_query($conn, $ins);
                if($res)
                {
                    echo "<script>alert('Registered Successfully')
                    location.href = 'login.php'</script>";
                }
            }
        }
        else
        {
            echo "<script>alert('Password and confirm password doesn\'t match')
            location.href='registration.php'</script>";
        }

        if(strlen($phone_number)>10)
        {
            echo "<script>alert('Invalid Phone Number')
            location.href='registration.php'</script>";
        }
    }
    else
    {
        echo "<script>alert('Enter all the details')
        window.location.href = 'registration.php'</script>";
    }

?>