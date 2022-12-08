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
        if($row['password'] == $pasword){
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $row['email_id'];
            if($row['role'] == "student"){
                $_SESSION['role'] = "student";
                header("location:student/index.php");
                exit();
            } else if($row['role'] == "admin"){
                $_SESSION['role'] = "admin";
                header("location:admin/index.php");
                exit();
            } else if ($row['role'] == "faculty"){
                $_SESSION['role'] == "faculty";
                header("location:faculty/index.php");
                exit();

            } else if ($row['role'] == "lecturer"){
                $_SESSION['role'] == "lecturer";
                header("location:lecturer/index.php");
                exit();
            } 
        }else{
            echo "<script>
        alert('Wrong password');
        </script>";
        header("location:login.php");
          
        }
        
    } else {
        echo "<script>alert('hello');</script>";
        
    }
    
}

?>