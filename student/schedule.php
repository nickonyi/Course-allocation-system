
<?php
session_start();
include_once("../db-connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/display.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css" integrity="sha512-giQeaPns4lQTBMRpOOHsYnGw1tGVzbAIHUyHRgn7+6FmiEgGGjaG0T2LZJmAPMzRCl+Cug0ItQ2xDZpTmEc+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script defer src="../scripts/script.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script defer src="https://kit.fontawesome.com/522abbd9b9.js" crossorigin="anonymous"></script>
    <title>Lecturer stats</title>
</head>
<body>
    <aside class="side-bar">
        <div class='side-container'>
        <div>
        <i class="fa-solid fa-house icon-house"></i>
        </div>
        <a href="index.php"><div class="text">Home</div></a>
        </div>
        <div class='side-container'>
        <div>
        <i class="fa-solid fa-chart-simple icon-house"></i>
        </div>
        <a href="student-stats.php"><div class="text">Schedule</div></a>
        
        </div>
    
    
    </aside>
    <main class="main-content">
        <h1>Schedule</h1>
        <div class="label-box">
        <?php
       
       $sql = "SELECT * from departments";
       $result = mysqli_query($conn,$sql); 
       ?>
       <label for="department-name">Department name</label><br>
    <select name="dept-name" id="dept-name">
    <option value="select-department">--Select department--</option>
       <?php while($row = mysqli_fetch_array($result)):;?>
       <option value="<?php echo $row['id'];?>"><?php echo $row['department_name'];?></option>
       <?php endwhile?>*/
    </select><br>
    <button id="submit" name='submit' type='submit'>View</button>
        </div>
        

        <table class="table table-bordered">
  <thead class='t-black'>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Course Code</th>
      <th scope="col">Course Name</th>
      <th scope="col">Schedule info</th>
     
      
    </tr>
  </thead>
  <?php
  if(isset($_POST['submit'])){
    echo "hello";
  }
    
  
  
  ?>
  <tbody>
    <tr>
      <td><?php echo $lecturer;?></td>
      <td><?php echo $department;?></td>
      <td><?php echo $coursename;?></td>
      <td><?php echo $coursecredit;?></td>
    </tr>
  </tbody>
    <?php
        }
    } ?>
</table>

 
    </main>
    
</body>
</html>