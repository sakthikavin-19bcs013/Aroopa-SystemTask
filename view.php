<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css\animated.css">
	
    <title>Employee Salary Management</title>
</head>
<?php
include "config.php";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

        $sql = "SELECT * FROM employee_details WHERE Employee_id IN (SELECT MAX(Employee_id) FROM employee_details);  ";
        $result = $conn->query($sql);

		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
			   $Employee_name = $row['Employee_name'];
			$Date_of_birth = $row['Date_of_birth'];
			$Department = $row['Department'];
			$Address1 = $row['Address1'];
			$Address2 = $row['Address2'];
			$E_mail = $row['E_mail'];
			$Phone_number = $row['Phone_number'];
			$Martial_status = $row['Martial_status'];
			$Salary = $row['Salary'];
			$Gender = $row['Gender'];
			}
		} else {
			echo "0 results";
		}

      $conn->close();
   
?>
<body>

<div class="container">
  <div class="title">Employee Details View</div>
  <form action="index.html" method="post">
    <div class="user__details">
      <div class="input__box">
        <span class="details">Employee Name</span>
         <input type="text" id="Employee_name" value="<?php echo $Employee_name; ?>">
      </div>
      <div class="input__box">
        <span class="details">Date of Birth</span>
        <input type="text" id="Date_of_birth" value="<?php echo $Date_of_birth; ?>">
      </div>
      <div class="input__box">
	     <span class="details">Department</span>
	     <input type="text" id="Department" value="<?php echo $Department; ?>">
	  </div>
	  <div class="input__box">
        <span class="details">Address1</span>
        <input type="text" id="Address1" value="<?php echo $Address1; ?>">
      </div>
	  <div class="input__box">
        <span class="details">Address2</span>
        <input type="text"  id="Address2" value="<?php echo $Address2; ?>">
      </div>
	  <div class="input__box">
        <span class="details">E_mail</span>
        <input type="text" id="E_mail" value="<?php echo $E_mail; ?>">
      </div>
      <div class="input__box">
        <span class="details">Phone Number</span>
        <input type="text" id="Phone_number" value="<?php echo $Phone_number; ?>">
      </div>     

	  <div class="input__box">
	   <span class="details">Martial Status</span>
	   <input type="text" id="Martial_status" value="<?php echo $Martial_status; ?>">
	  </div>
      <div class="input__box">
        <span class="details">Salary</span>
        <input type="text" id="Salary" value="<?php echo $Salary; ?>">
      </div>
       <div class="input__box">      
         <span class="details">Gender</span>
         <input type="text" id="Gender" value="<?php echo $Gender; ?>">
	   </div>
	    </div>
    <div class="button">
	
	 <input type="submit" value="ok">
	

	  
    </div>

   
  </form>

</div>

</body>

</html>