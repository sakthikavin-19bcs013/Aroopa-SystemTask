<?php
if($_REQUEST['btnsubmit']=='Update'){
    $Employee_id=$_POST['Employee_id'];
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
	} 
	
	$sql="UPDATE employee_details SET Employee_name = '$Employee_name', Date_of_birth= '$Date_of_birth',Department='$Department',Address1='$Address1',Address2='$Address2',E_mail='$E_mail',Phone_number='$Phone_number',Martial_status='$Martial_status',Salary='$Salary',Gender='$Gender' WHERE Employee_id = $Employee_id;";
		if($conn->query($sql) === True)
		{
			header("Location:/gridconnect.php");
		}
		else
		{
			echo "Error:";
		}	
		
		$conn->close();
	}
else if($_REQUEST['btnsubmit']=='Cancel'){
	header("Location:/gridconnect.php");
	
}
?>