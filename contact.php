<?php
    session_start();

    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'coexist');
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message = $_POST['message'];

        $reg = "insert into contact(name,email,message) values ('$name','$email','$message')";
        mysqli_query($con,$reg);
        #echo nl2br("\n\n Your Querry Has Being Successfully Registered \n\n \n
        #Now Go To The Login Page To Login Into You Accout \n\n\n Thank You");
        header('location:contact.html');
?>