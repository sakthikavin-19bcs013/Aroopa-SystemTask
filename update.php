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
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM employee_details WHERE Employee_id =$id";
        $result = $conn->query($sql);

		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$Employee_id=$row['Employee_id'];
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
	}
   
?>
<body>

<div class="container">
  <div class="title">Edit</div>
  <form action="connect2.php" method="post">
    <div class="user__details">
	<div class="input__box">
        <span class="details">Employee id</span>
        <input type="text" id="Employee_id" name="Employee_id" value="<?php echo $Employee_id; ?>">
      </div>
      <div class="input__box">
        <span class="details">Employee Name</span>
        <input type="text" id="Employee_name" name="Employee_name" value="<?php echo $Employee_name; ?>">
      </div>
      <div class="input__box">
        <span class="details">Date of Birth</span>
        <input type="Date" id="Date_of_birth" name="Date_of_birth" value="<?php echo $Date_of_birth; ?>">
      </div>
      <div class="input__box">
	  <span class="details">Department</span>
	  <select class="form-control" id="Department" name="Department">
		<option value="Software" <?php if($Department == "Software") echo 'selected = "selected"'; ?>>Software</option>		
		<option value="Hr" <?php if($Department == "Hr") echo 'selected = "selected"'; ?>>Hr</option>		
		<option value="Sales" <?php if($Department == "Sales") echo 'selected = "selected"'; ?>>Sales</option>
		<option value="Product" <?php if($Department == "Product") echo 'selected = "selected"'; ?>>Product</option>
		</select>
	  </div>
	  <div class="input__box">
        <span class="details">Address1</span>
        <input type="text" id="Address1" name="Address1" value="<?php echo $Address1; ?>">
      </div>
	  <div class="input__box">
        <span class="details">Address2</span>
        <input type="text"  id="Address2" name="Address2" value="<?php echo $Address2; ?>">
      </div>
	  <div class="input__box">
        <span class="details">E_mail</span>
        <input type="email" id="E_mail" name="E_mail" value="<?php echo $E_mail; ?>">
      </div>
      <div class="input__box">
        <span class="details">Phone Number</span>
        <input type="tel" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" id="Phone_number" name="Phone_number" value="<?php echo $Phone_number; ?>">
      </div>     

	  <div class="input__box">
	  <span class="details">Martial Status</span>
	  <select class="form-control" id="Martial_status" name="Martial_status">
		<option value="Married" <?php if($Martial_status == "Married") echo 'selected = "selected"'; ?>>Married</option>
		<option value="Unmarried" <?php if($Martial_status == "Unmarried") echo 'selected = "selected"'; ?>>UnMarried</option>
		</select>
	  </div>
      <div class="input__box">
        <span class="details">Salary</span>
        <input type="Number" id="Salary" name="Salary" value="<?php echo $Salary; ?>">
      </div>
       <div class="gender__details" name="Gender">
      
	  <input type="radio" id="dot-1" <?php if($Gender == "Male") echo "checked" ?> value="Male" name="Gender"> 
      <input type="radio" id="dot-2" <?php if($Gender == "Female") echo "checked" ?> value="Female" name="Gender">
      <input type="radio" id="dot-3" <?php if($Gender == "Others") echo "checked" ?> value="Others" name="Gender">
      <span class="gender__title">Gender</span>
      <div class="category">
        <label for="dot-1">
          <span class="dot one"></span>
          <span>Male</span>
        </label>
        <label for="dot-2">
          <span class="dot two"></span>
          <span>Female</span>
        </label>
        <label for="dot-3">
          <span class="dot three"></span>
          <span>Others</span>
        </label>
      </div>
    </div>
	   </div>
    <div class="button">
      <input type="submit" name="btnsubmit" value="Update">
	  <input type="submit" name="btnsubmit" value="Cancel">
      
    </div>
 
   
  </form>

</div>

</body>
</html>