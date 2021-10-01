<?php

    $email = $_GET['email'];
    $password = $_GET['password'];

    $con = new mysqli("localhost","root","","register");

    if($con->connect_error){
        die("Failed to connect:".$con->connect_error);
    }else{
        $stmt=$con->prepare("select * from userinfo where email = ?");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt_result=$stmt->get_result();
        if($stmt_result->num_rows>0){
            $data=$stmt_result->fetch_assoc();
            if($data['password']===$password){
                header("Location:index.html");
            }else{
                header("Location:invalid.html");
            }
        }else{
            header("Location:invalid.html");
        }
        
    }

?>