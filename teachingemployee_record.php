<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Teaching Employee</title>
        <link rel="stylesheet" href="teachingrecordstyle.css">
       
    </head>
    <body>
    
    <?php require_once 'process.php'; ?>

    <nav>
            <label class="logo">ABCS Institute</label>
            <ul>
                <li><a class="active" href="teachingemployee_record.php">Employee Record</a></li>
                <li><a href="teachingemployee_payroll.php">Employee Payroll</a></li>
                <li><a href="index.php">Exit</a></li>
            </ul>
        </nav>
        <?php
            if (isset($_SESSION['message'])): ?>

                
        <div class="alert <?=$_SESSION['msg_type']?>">
                
        <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        ?>
        </div>
        
        <?php endif ?>

        <style type="text/css">
                .form-style-3{
                max-width: 470px;
                font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
                top: 100px;
                left: 50px;
                position: fixed;
                }
                .form-style-3 label{
                display:block;
                margin-bottom: 5px;
                }
                .form-style-3 label > span{
                    float: left;
                    width: 100px;
                    color: #0000cd;
                    font-weight: bold;
                    font-size: 15px;
                    text-shadow: 1px 1px 1px #fff;
                    bottom: 5px;
                    width: 130px;
                    height: 10px;
                }
                .form-style-3 fieldset{
                border-radius: 10px;
                -webkit-border-radius: 10px;
                -moz-border-radius: 10px;
                margin: 0px 0px 10px 0px;
                border: 1px solid #4169e1;
                padding: 20px;
                background: #ace5ee;
                box-shadow: inset 0px 0px 15px #4169e1;
                -moz-box-shadow: inset 0px 0px 15px #4169e1;
                -webkit-box-shadow: inset 0px 0px 15px #4169e1;
            }
            .form-style-3 fieldset legend{
            color: black;
            border-top: 1px solid #4169e1;
            border-left: 1px solid #4169e1;
            border-right: 1px solid #4169e1;
            border-radius: 5px 5px 0px 0px;
            -webkit-border-radius: 5px 5px 0px 0px;
            -moz-border-radius: 5px 5px 0px 0px;
            background: #ace5ee;
            padding: 0px 8px 3px 8px;
            box-shadow: -0px -1px 2px #F1F1F1;
            -moz-box-shadow:-0px -1px 2px #F1F1F1;
            -webkit-box-shadow:-0px -1px 2px #F1F1F1;
            font-weight: normal;
            font-size: 25px;
            font-weight: bold;
        }
        .form-style-3 input[type=type]{
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border: 1px solid #4169e1;
            outline: none;
            color: black;
            padding: 7px 8px 7px 13px;
            box-shadow: inset 1px 1px 4px #F1F1F1;
            -moz-box-shadow: inset 1px 1px 4px #F1F1F1;
            -webkit-box-shadow: inset 1px 1px 4px #F1F1F1;
            background: #e7feff;
            width:70%;
            margin: 12px;
            font-size: 20px;
        }
        .form-style-3 label[for="field1"]{
            margin-left: 25px
        }
        .form-style-3  input[type=submit]{
        background: #6495ed;
        margin-left: 150px;
        margin-top: 10px;
        border: 1px solid #4169e1;
        padding: 5px 15px 5px 15px;
        color: black;
        box-shadow: inset -1px -1px 3px #F1F1F1;
        -moz-box-shadow: inset -1px -1px 3px #F1F1F1;
        -webkit-box-shadow: inset -1px -1px 3px #F1F1F1;
        border-radius: 3px;
        border-radius: 3px;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;	
        font-weight: bold;
        font-size: 20px;
        cursor: pointer;
        }
        .required{
            color:red;
            font-weight:normal;
        }
        .container {
            max-width: 1000px;
            margin-left: 550px;
            margin-right: 130px;
            padding-left: 80px;
            padding-right: 10px;
            margin-top: 80px;
        }
        table, th, td {
            border: 1px solid;
        }
        table thead{
            background-color: #abcdef;
        }
        table {
            border-collapse: collapse;	
        }
        table {
            width: 120%;
            margin-left: -40px;
        }
        th {
            height: 70px;
        }
        td, th {
            text-align: center;
        }
        td {
            height: 50px;
        }
        tr:hover {
            background-color: coral;
        }
        h2{
            text-align: center;
        }
        .button-info {
            background-color: #0078d0;
            border: 0;
            border-radius: 30px;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-family: system-ui,-apple-system,system-ui,"Segoe UI",Roboto,Ubuntu,"Helvetica Neue",sans-serif;
            font-size: 14px;
            outline: 0;
            padding: 16px 21px;
            position: relative;
            text-align: center;
            text-decoration: none;
            transition: all .3s;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

            .button-info:before {
            background-color: initial;
            background-image: linear-gradient(#fff 0, rgba(255, 255, 255, 0) 100%);
            border-radius: 125px;
            content: "";
            height: 50%;
            left: 4%;
            opacity: .5;
            position: absolute;
            top: 0;
            transition: all .3s;
            width: 92%;
            }

            .button-info:hover {
            box-shadow: rgba(255, 255, 255, .2) 0 3px 15px inset, rgba(0, 0, 0, .1) 0 3px 5px, rgba(0, 0, 0, .1) 0 10px 13px;
            transform: scale(1.05);
            }

            @media (min-width: 400px) {
            .button-info {
                padding: 5px 20px;
            }
            }
            

            .button-danger {
            background-color: #b22222;
            border: 0;
            border-radius: 30px;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-family: system-ui,-apple-system,system-ui,"Segoe UI",Roboto,Ubuntu,"Helvetica Neue",sans-serif;
            font-size: 13px;
            outline: 0;
            padding: 16px 21px;
            position: relative;
            text-align: center;
            text-decoration: none;
            transition: all .3s;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

            .button-danger:before {
            background-color: initial;
            background-image: linear-gradient(#fff 0, rgba(255, 255, 255, 0) 100%);
            border-radius: 125px;
            content: "";
            height: 50%;
            left: 4%;
            opacity: .5;
            position: absolute;
            top: 0;
            transition: all .3s;
            width: 92%;
            }

            .button-danger:hover {
            box-shadow: rgba(255, 255, 255, .2) 0 3px 15px inset, rgba(0, 0, 0, .1) 0 3px 5px, rgba(0, 0, 0, .1) 0 10px 13px;
            transform: scale(1.05);
            }

            @media (min-width: 400px) {
            .button-danger {
                padding: 5px 20px;
            }
            }
            .alert{
                width:20%;
                margin:20px auto;
                padding:15px;
                position:relative;
                border-radius:5px;
                box-shadow:0 0 15px 5px #353839;
                left: 250px;
                background-color: #ffd48a;
                text-align: center;
                font-size: 20px;
            }
        </style>

        <?php

             $mysqli = new mysqli('localhost', 'jhey.vill', 'akosijellyann05', 'teaching_record') or die(mysqli_error($mysqli));
            $result = $mysqli->query("SELECT * FROM data")
            or die(mysqli_error($mysqli));
            $conn = mysqli_connect('localhost', 'jhey.vill', 'akosijellyann05', 'teaching_record');
            //pre_r($result);
           ?>

        <div class="container">
            <table class="table">
                <h2> Teaching Employee Record for PAYROLL</h2>
                <thead>
                    <tr>
                        <th>Employee ID</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Department Name</th>
                        <th>Position</th>
                        <th colspan="2">Action</th>
                    </tr> 
                </thead>
            <?php
                while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['employee_id']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['department']; ?></td>
                    <td><?php echo $row['position']; ?></td>
                    <td>
                        <a href="teachingemployee_record.php?edit=<?php echo $row['employee_id']; ?>"
                            ><button type="button" class="button-info">Edit</button></a>
                        <a href="process.php?delete=<?php echo $row['employee_id']; ?>"
                            ><button type="button" class="button-danger">Delete</button></a>
                    </td>
                </tr>
                <?php endwhile; ?>
        </table>
        </div>
        
        <?php
            function pre_r( $array ) {
                echo '<pre>' ;
                print_r($array);
                echo '<pre>';
            }
        ?>


        <div class="form-style-3">
            <form action="process.php" method="POST">

            <input type="hidden" name="employee_id" value="<?php echo $employee_id; ?>">

            <fieldset><legend>Teaching Employee Record</legend>

            <label for="field1"><span>Last Name <span class="required">*</span></span>
                <input type="type" name="lastname" class="input-field"
                value = "<?php echo $lastname; ?>" placeholder="Enter your Last Name">
            <label for="field2"><span>First Name <span class="required">*</span></span>
                <input type="type" name="firstname" class="input-field"
                value = "<?php echo $firstname; ?>" placeholder="Enter your First Name">
            <label for="field3"><span>Department <span class="required">*</span></span>
                <input type="type" name="department" class="input-field"
                value = "<?php echo $department; ?>" placeholder="Name of your Department">
            <label for="field4"><span>Position <span class="required">*</span></span>
                <input type="type" name="position" class="input-field" 
                value = "<?php echo $position; ?>"placeholder="Your Position">

            <?php
                if ($update == true):
                    ?>
                    <label><span> </span><input type="submit" name="update" value="Update"></label>
            <?php else: ?>
                <label><span> </span><input type="submit" name="save" value="Save"></label>
            <?php endif; ?>
            </fieldset>
            </form>
        </div>  
       

        
    </body>
</html>