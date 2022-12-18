<?php
include_once("../db-connect.php");
session_start();

if(isset($_POST['submit'])){
    $coursecode= $_POST['course-code'];
    $coursename = $_POST['course-name'];
    $coursecredit = $_POST['course-credit'];
    $coursedescription = $_POST['course-description'];
    $depatment = $_POST['dept-name'];
    $semester = $_POST['semester'];

    $sql = "INSERT INTO courses(department_id,semester_id,course_code,course_name,credit,description) VALUES('$depatment','$semester','$coursecode','$coursename','$coursecredit','$coursedescription')";
    $result = mysqli_query($conn,$sql);
    if($result){
          $_SESSION['status'] = "Course added successfully!!!";
         
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script defer src="../scripts/script.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <title>Course allocation system</title>
</head>

<body>
    <div class="header"></div>
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
        <h1 class="head">Course setup</h1>
        <?php
        if(isset($_SESSION['status'])){
            ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
            <?php
            
            unset($_SESSION['status']);
        }
        
        ?>
    <form method="post" action="#">
        <label for="course-code">Course Code</label><br>
        <input type="text" name="course-code" id="course-code" placeholder="Type the department code"><br>
        <label for="course-name">Course Name</label><br>
        <input type="text" name="course-name" id="course-name" placeholder="Type the course name"><br>
        <label for="course-credit">Course Credit</label><br>
        <input type="number" name="course-credit" id="course-credit" placeholder="Type the course credit"><br>
        <label for="course-description">Course Description</label><br>
        <textarea name="course-description" id="course-description" cols="40" rows="5" placeholder="Type the course description"></textarea><br>
        <?php
       
        $sql = "SELECT * from departments";
        $result = mysqli_query($conn,$sql); 
        ?>
        <label for="department-name">Department name</label><br>
     <select name="dept-name">
        <?php while($row = mysqli_fetch_array($result)):;?>
        <option value="<?php echo $row['id'];?>"><?php echo $row['department_name'];?></option>
        <?php endwhile?>
     </select><br>
     <label for="semester">Semester</label><br>
     <select name="semester" id="semester">
            <option value="semester">--Select Semester--</option>
            <option value="1">1st</option>
            <option value="2">2nd</option>
            <option value="3">3rd</option>
            <option value="4">4th</option>
            <option value="5">5th</option>
            <option value="6">6th</option>
            <option value="7">7th</option>
            <option value="8">8th</option>
        </select><br>
        <button name='submit' type='submit'>save</button>
    </form>
    </div>
</body>

</html>
