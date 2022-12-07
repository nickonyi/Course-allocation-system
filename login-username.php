<?php

include_once("./db-connect.php");
if(isset($_POST['submit'])){
     $username = $_POST['username'];
     $pasword = $_POST['password'];

     $sql = "SELECT username,email_id,password,role from login_role where username ='$username' ";
    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    if($count > 0){
        if($row['password'] = $pasword){
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $row['email_id'];
            
        }
        
    }
    
}

?>