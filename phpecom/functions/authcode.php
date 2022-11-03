<?php
session_start();
include('../config/dbcon.php');

if(isset($_POST['register_btn'])){

    $name = mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    $pass = mysqli_real_escape_string($con,$_POST['password']);
    $c_pass = mysqli_real_escape_string($con,$_POST['cpassword']);

    $check_email_query = 'SELECT email FROM users WHERE email = "$email" ';
    $check_email_run = mysqli_query($con, $check_email_query);

    if(mysqli_num_rows($check_email_run) > 0){
        $_SESSION['message'] = "Email Already Registered";
        header('Location: ../register.php');
    }
    else{
        if($pass == $c_pass){
            $query = "INSERT INTO users (name,email,phone,password) VALUES ('$name','$email','$phone', '$pass')";
            $query_run = mysqli_query($con,$query);
    
            if($query_run){
                $_SESSION['message'] = "Register Successfully";
                header('Location: ../login.php');
            }
            else{
                $_SESSION['message'] = "Something Went Wrong";
                header('Location: ../register.php');
            }
        }
        else{
            $_SESSION['message'] = "Password Do Not Match";
            header('Location: ../register.php');
        }
    }

}


