<?php
if($_REQUEST['btnsubmit']=='Register'){
	
	
	
	$Employee_name = $_POST['Employee_name'];
    $Date_of_birth = $_POST['Date_of_birth'];
	$Department = $_POST['Department'];
	$Address1 = $_POST['Address1'];
	$Address2 = $_POST['Address2'];
	$E_mail = $_POST['E_mail'];
	$Phone_number = $_POST['Phone_number'];
	$Martial_status = $_POST['Martial_status'];
	$Salary = $_POST['Salary'];
	$Gender = $_POST['Gender'];

	 include "config.php";
		
	
	if($conn->connect_error){
		//echo "$conn->connect_error";
		die('Connection Failed : '. $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into employee_details(Employee_name,Date_of_birth,Department,Address1,Address2,E_mail,Phone_number,Martial_status,Salary,Gender) values(?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("ssssssisis", $Employee_name,$Date_of_birth,$Department,$Address1,$Address2,$E_mail,$Phone_number,$Martial_status,$Salary,$Gender);
		$execval = $stmt->execute();
		echo $execval;			
		
			header("Location:/view.php");
		
		$stmt->close();
		$conn->close();
	}
}
else if($_REQUEST['btnsubmit']=='View'){
	header("Location:/gridconnect.php");
	
}
else if($_REQUEST['btnsubmit']=='Cancel'){
	
}
?>