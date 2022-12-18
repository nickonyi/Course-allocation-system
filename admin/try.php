
<?php  
include_once("../db-connect.php");

if(isset($_POST['submit'])){
    $lecname= $_POST['lec-name'];
    $lecaddress = $_POST['address'];
    $lecemail = $_POST['lec-email'];
    $leccontact = $_POST['lec-contact'];
    $lecdesg = $_POST['designation'];
    $lecdep = $_POST['dept-name'];
    $leccred = $_POST['lec-cred'];

    $sql = "INSERT INTO lecturers(department_id,lecturer_name,address,email,contact_no,designation,credit_to_be_taken) VALUES('$lecdep','$lecname','$lecaddress','$lecemail','$leccontact','$lecdesg','$leccred')";
    $result = mysqli_query($conn,$sql);
    if($result){
          $_SESSION['status'] = "Lecturer added successfully!!!";
          header("Location:lecturer.php");
    }
    
}


?>
        
        

        