<?php
include_once("../db-connect.php");
session_start();
if(isset($_POST['submit'])){
   echo $lecname = $_POST['lec-name'];

    $sql = "INSERT INTO departments SET department_code='$depart_code',department_name='$depart_name'";
     $res = mysqli_query($conn,$sql);
     if($res){
         echo "successfully inserted";
     } 
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script defer src="../scripts/script.js"></script>
    <title>Course allocation system</title>
</head>

<body>
    <div class="header">
        <?php if(isset($_SESSION['success'])){
    echo $_SESSION['success'];
   unset($_SESSION['success']);
}
    ?></div>
    <div class="side-bar">
        <div class="side-bar-header">
            <div>
                <img src="../assets/icons/icons8-dashboard-layout-48.png" alt="">
            </div>
            <a href="./index.php"><div class="text">T.U.K admin</div></a>
            
        </div>
        <div class="side-bar-contents">
            <div>
                <img src="../assets/icons/dashboard-solid-48.png" alt="">
            </div>
            <div class="text">Dashboard</div>
            <div>
                <img src="../assets/icons/form.svg" alt="">
            </div>
            <div class="text">Forms</div>
            <div>
                <img src="../assets/icons/pin.svg" alt="">
            </div>
            <div class="text">Application statistics</div>
            <div>
                <img src="../assets/icons/stats.svg" alt="">
            </div>
            <div class="text">Student statistics</div>
            <div>
                <img src="../assets/icons/stats.svg" alt="">
            </div>
            <div class="text">Lecturer statistics</div>
        </div>
    </div>

    </div>
    <div class="grid--department main-content-depart">
        <h1 class="head">Assign course to teacher</h1>
    <form method="post">
    <?php
       
       $sql = "SELECT * from departments";
       $result = mysqli_query($conn,$sql); 
       ?>
       <label for="department-name">Department name</label><br>
    <select name="dept-name">
       <?php while($row = mysqli_fetch_array($result)):;?>
       <option value="<?php echo $row['id'];?>"><?php echo $row['department_name'];?></option>
       <?php endwhile?>*/
    </select><br>
    <?php
       
       $sql = "SELECT * from lecturers";
       $result = mysqli_query($conn,$sql); 
       ?>
       <label for="lecturer-name">Lecturer</label><br>
    <select name="lec-name">
       <?php while($row = mysqli_fetch_array($result)):;?>
       <option value="<?php echo $row['lecturer_name'];?>"><?php echo $row['lecturer_name'];?></option>
       <?php endwhile?>*/
    </select><br>
    <?php
    $sql = "SELECT credit_to_be_taken FROM lecturers WHERE lecturer_name='$lecname'";
    $result = mysqli_query($conn,$sql);
    if($result){
        if($row = $result->fetch_assoc()){
            $credit_taken = $row['credit_to_be_taken'];
        }
    }
    
    ?>
        <label for="credit-taken">Credit to be taken</label><br>
        <input type="text" name="credit-taken" id="credit-taken" value="<?php echo $credit_taken?>" readonly><br>
        <label for="department-name">Department name</label><br>
        <input type="text" name="depart-name" id="department-name" placeholder="Type department name"><br>
        <button name='submit' type='submit'>save</button>
    </form>
    </div>
</body>

</html>
