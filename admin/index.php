<?php
session_start();

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
        <?php if(isset($_SESSION['login'])){
            echo $_SESSION['login'];
            
        }
    ?></div>
    <div class="side-bar">
        <div class="side-bar-header">
            <div>
                <img src="../assets/icons/icons8-dashboard-layout-48.png" alt="">
            </div>
            <div class="text">T.U.K admin</div>
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
    <div class="grid main-content">
        <div class="box content-1">
            <div>
                <img src="../assets/icons/home.svg" alt="">
            </div>
            <a href="dashboard.php">
            <div class="text">
                Dashboard
            </div>
            </a>
            
        </div>
        <div class="box content-2">
            <div>
                <img src="../assets/icons/Vector.svg" alt="">
            </div>
            <a href="lecturer.php">
            <div class="text">
                Lecturers
            </div>
            </a>
        </div>
        <div class="box content-3">
            <div>
                <img src="../assets/icons/applic.png" alt="">
            </div>
            <a href="course-assign-to-teacher.php">
            <div class="text">
                Assign course to lecturer
            </div>
            </a>
        </div>
        <div class="box content-4">
            <div>
                <img src="../assets/icons/depart.svg" alt="">
            </div>
            <a href="department-setup.php">
            <div class="text">
                Department/Faculties
            </div>
            </a>
           
        </div>
        <div class="box content-5">
            <div>
                <img src="../assets/icons/Vector.svg" alt="">
            </div>
            <a href="student.php">
            <div class="text">
                Students
            </div>
            </a>
           
        </div>
        <div class="box content-6">
            <div>
                <img src="../assets/icons/stats.svg" alt="">
            </div>
            <div class="text">
                Statistics
            </div>
        </div>
        <div class="box content-7">
            <div>
                <img src="../assets/icons/form.svg" alt="">
            </div>
            <a href="course-setup.php">
            <div class="text">
                Courses
            </div>
            </a>
            
        </div>
        <div class="box content-8">
            <div>
                <img src="../assets/icons/applic.png" alt="">
            </div>
            <div class="text">
                Applications
            </div>
        </div>
    </div>
</body>

</html>