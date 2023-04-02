<?php
    session_start();

    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'coexist');
    $email=$_POST['email'];
    $pass = $_POST['pass'];


    $s= "select * form register where email='$email' && pass='$pass' ";
    
    $result = mysqli_query($con,$s);
    
    $num= mysqli_num_rows($result);

    header('location:index.html');

   # if ($num==TRUE) {
    #    header('location:index.html');
    #}

    #else{
     #   header('location:login.html');
    #}
?>