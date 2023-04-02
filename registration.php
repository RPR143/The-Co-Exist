<?php
    session_start();

    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'coexist');
    $fname=$_POST['fname'];
    $lname= $_POST['lname'];
    $email=$_POST['email'];
    $pass = $_POST['pass'];


    $s= "select * form register where email='$email'";
    
    $result = mysqli_query($con,$s);
    
    $num= mysqli_num_rows($result);

    if ($num==TRUE) {
        echo nl2br("\n\nThis Emails Is Already Registered \n\n Go Back And Try Again  \n\n Thank You  ");
        #header('location:login.html');
    }

    else{
        $reg = "insert into register(fname,lname,email,pass) values ('$fname','$lname','$email','$pass')";
        mysqli_query($con,$reg);
        echo nl2br("\n\nRegistration Successfull Done \n\n \n Now Go To The Login Page To Login Into You Accout \n\n\n Thank You");
        header('location:login.html');
    }
?>