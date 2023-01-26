<?php
    include "config.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from employee_details where Employee_id=$id";
        $conn->query($sql);
    }
    header('location:/gridconnect.php');
    exit;
?>