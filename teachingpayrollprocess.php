<?php

    session_start();

    $mysqli = new mysqli('localhost', 'jhey.vill', 'akosijellyann05', 'teaching_record') or die(mysqli_error($mysqli));

    $payroll_id = 0;
    $update = false;
    $pay = "";
    $date_edited= "";
    $employee_id1 = "";
    $payroll_id= "";

    if (isset($_POST['save'])){
        $emp_id = $_POST['emp_id'];
        $pay = $_POST['pay'];
        $datecomp = $_POST['datecomp'];

        $mysqli->query("INSERT INTO `salary` (emp_id, pay, datecomp) 
            VALUES('$emp_id', '$pay', '$datecomp')")
            or die($mysqli->error);

        $_SESSION['message'] = "Record has been ADDED!";
        $_SESSION['msg_type'] = "success";

        header("location: teachingemployee_payroll.php");
    }

    if (isset($_GET['delete'])){
        $payroll_id = $_GET['delete'];

        $mysqli->query("DELETE FROM `salary` WHERE payroll_id = '$payroll_id'") 
        or die($mysqli->error);

        $_SESSION['message'] = "Record has been DELETED!";
        $_SESSION['msg_type'] = "danger";

        header("location: teachingemployee_payroll.php");
    }

    if (isset($_GET['edit'])){
        $payroll_id = $_GET['edit'];
        $update = true;
        $result = $mysqli->query("SELECT * FROM `salary` WHERE payroll_id = '$payroll_id'")
        or die($mysqli->error);
        
        
            $row = $result->fetch_array();
            $emp_id = $row['emp_id'];
            $pay = $row['pay'];
            $datecomp = $row['datecomp'];
            $_SESSION['message'] = "You can now EDIT!". " <br/> ( Please select the same EMPLOYEE ID)";
            $_SESSION['msg_type'] = "finalizing";
    }

    if (isset($_POST['update'])){
        $payroll_id = $_POST['payroll_id'];
        
        $emp_id = $_POST['emp_id'];
        $pay = $_POST['pay'];
        $datecomp = $_POST['datecomp'];

        $mysqli->query("UPDATE `salary` SET emp_id='$emp_id', pay='$pay', 
        datecomp='$datecomp'")
        or die($mysqli->error);

        $_SESSION['message'] = "Record has been UPDATED!";
        $_SESSION['msg_type'] = "warning";

        header("location: teachingemployee_payroll.php");
    }


?>