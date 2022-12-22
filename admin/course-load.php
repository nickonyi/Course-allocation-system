<?php
include '../db-connect.php';
// Get the user id
 $user_id = $_REQUEST['id'];

// Database connection


if ($user_id !== "") {
	
	// Get corresponding first name and
	// last name for that user id	
	
    $sql = "SELECT lecturers.lecturer_name,lecturers.department_id FROM lecturers INNER JOIN departments ON lecturers.department_id=departments.id WHERE lecturers.department_id='$user_id'";
    $result = mysqli_query($conn, $sql);

	while($row = mysqli_fetch_assoc($result)){
          // Get the first name
            $lecturer_name[] = $row["lecturer_name"];
           $department_id[] = $row["department_id"];
    }   
}

// Store it in a array
     for ($i=0; $i <count($lecturer_name) ; $i++) { 
        $result = array(
            'lecturer_name' => $lecturer_name[$i],
            'department_id' => $department_id[$i]
        );
       
     }
    

     echo $myJSON = json_encode($result);



 

// Send in JSON encoded form


?>