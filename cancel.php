<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" href="css\animated.css"> 
		<link rel="stylesheet" href="css\stylesheet.css">

    <title>Employee Salary Management</title>
	
  </head>
  <body>
  <div style="max-width: fit-content;width: fit-content;height: fit-content;background: #fff;padding: 25px 30px;border-radius: 5px;">
  <div class="container" >
  <div class="title" >Employee's View</div>
  </div>
	<table class="table">	
    <thead>
      <tr>
        <th>Emp_ID</th>
        <th>Emp_NAME</th>
		<th>DOB</th>
		<th>Department</th>
		<th>Address1</th>
		<th>Address2</th>
        <th>EMAIL</th>
        <th>PHONE</th>
        <th>Martial status</th>
		<th>Salary</th>
		<th>Gender</th>
		
        
      </tr>
    </thead>
    <tbody>
	<?php
        include "config.php";
        $sql = "SELECT * FROM employee_details ORDER BY Employee_id ASC";
        $result = $conn->query($sql);
        if(!$result)
		{
			die("Invalid query!");
		}
		while($row=$result->fetch_assoc()){
		echo"		  
	   <tr>
        <th>$row[Employee_id]</th>
        <td>$row[Employee_name]</td>
        <td>$row[Date_of_birth]</td>
        <td>$row[Department]</td>
        <td>$row[Address1]</td>
		<th>$row[Address2]</th>
        <td>$row[E_mail]</td>
        <td>$row[Phone_number]</td>
        <td>$row[Martial_status]</td>
        <td>$row[Salary]</td>
		<td>$row[Gender]</td>
        
      </tr>
      ";
        }
      ?>
    </tbody>
    </table>
	
	<div class="buttong" al>
      <a href='index.html'>
	  <input type="submit" name="btnsubmit" value="Add Employee">
	  </a>
	  <a href='gridconnect.php'>
	  <input type="submit" name="btnsubmit" value="Edit">
	  </a>
    </div>
   </div>
 
  <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
   </body>
</html>