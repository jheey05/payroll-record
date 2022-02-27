<?php

    session_start();

    $mysqli = new mysqli('localhost', 'jhey.vill', 'akosijellyann05', 'non_teaching_record') or die(mysqli_error($mysqli));

    $employee_id = 0;
    $update = false;
    $lastname = "";
    $firstname = "";
    $department = "";
    $position = "";

    if (isset($_POST['save'])){
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $department = $_POST['department'];
        $position = $_POST['position'];

        $mysqli->query("INSERT INTO data (lastname, firstname, department, position) 
            VALUES('$lastname', '$firstname', '$department', '$position')")
            or die($mysqli->error);

        $_SESSION['message'] = "Record has been ADDED!";
        $_SESSION['msg_type'] = "success";

        header("location: nonteachingemployee_record.php");
    }

    if (isset($_GET['delete'])){
        $employee_id = $_GET['delete'];

        $mysqli->query("DELETE FROM data WHERE employee_id = '$employee_id'") 
        or die($mysqli->error);

        $_SESSION['message'] = "Record has been DELETED!";
        $_SESSION['msg_type'] = "danger";

        header("location: nonteachingemployee_record.php");
    }

    if (isset($_GET['edit'])){
        $employee_id = $_GET['edit'];
        $update = true;
        $result = $mysqli->query("SELECT * FROM data WHERE employee_id = '$employee_id'")
        or die($mysqli->error);
        
        
            $row = $result->fetch_array();
            $lastname = $row['lastname'];
            $firstname = $row['firstname'];
            $department = $row['department'];
            $position = $row['position'];
        
    }

    if (isset($_POST['update'])){
        $employee_id = $_POST['employee_id'];
        
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $department = $_POST['department'];
        $position = $_POST['position'];

        $mysqli->query("UPDATE data SET lastname='$lastname', firstname='$firstname', 
        department='$department', position='$position' WHERE employee_id = '$employee_id'")
        or die($mysqli->error);

        $_SESSION['message'] = "Record has been UPDATED!";
        $_SESSION['msg_type'] = "warning";

        header("location: nonteachingemployee_record.php");
    }


?>