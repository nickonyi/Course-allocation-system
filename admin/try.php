
<?php  
include_once("../db-connect.php");



$sql = 
    "SELECT CONCAT("
        . "DATE_FORMAT(CURDATE(), '%y'), "
        . "LPAD(COALESCE(MAX(RIGHT(id, 5)) + 1, 1), 5, '7')"
    . ") AS student_reg_no "
    . "FROM students";

$result = $conn->query($sql);
if ($result) {
    if ($row = $result->fetch_assoc()) {
       // insert student here using $row['new_id']
      echo $row['student_reg_no'];
    }
}


?>
        
        

        