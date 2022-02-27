<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Teaching Employee</title>
        <link rel="stylesheet" href="teachingpayrollstyle.css">
    </head>
    <body>

    <?php require_once 'teachingpayrollprocess.php'; ?>
        <nav>
            <label class="logo">ABCS Institute</label>
            <ul>
                <li><a href="teachingemployee_record.php">Employee Record</a></li>
                <li><a class="active" href="teachingemployee_payroll.php">Employee Payroll</a></li>
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
                position: absolute;
                max-width: 500px;
                font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
                top: 100px;
                left: 50px;
                }
                .form-style-2{
                position: absolute;
                max-width: 500px;
                font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
                top: 750px;
                left: 50px;
                }
                .form-style-1{
                position: absolute;
                max-width: 500px;
                font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
                top: 1400px;
                left: 50px;
                }
                .form-style-3 label{
                display:block;
                margin-bottom: 5px;
                }
                .form-style-2 label{
                display:block;
                margin-bottom: 5px;
                }
                .form-style-1 label{
                display:block;
                margin-bottom: 5px;
                }
                .form-style-3 label > span{
                    float: left;
                    color: #0000cd;
                    font-weight: bold;
                    font-size: 15px;
                    text-shadow: 1px 1px 1px #fff;
                    bottom: 5px;
                    width: 160px;
                    height: 10px;
                }
                .form-style-2 label > span{
                    float: left;
                    color: #0000cd;
                    font-weight: bold;
                    font-size: 15px;
                    text-shadow: 1px 1px 1px #fff;
                    bottom: 5px;
                    width: 160px;
                    height: 10px;
                }
                .form-style-1 label > span{
                    float: left;
                    color: #0000cd;
                    font-weight: bold;
                    font-size: 15px;
                    text-shadow: 1px 1px 1px #fff;
                    bottom: 5px;
                    width: 160px;
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
            .form-style-2 fieldset{
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
            .form-style-1 fieldset{
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
        .form-style-2 fieldset legend{
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
        .form-style-1 fieldset legend{
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
        .form-style-2 input[type=type]{
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
        .form-style-1 input[type=type]{
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
        .form-style-3 input[type=type1]{
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border: 1px solid #4169e1;
            outline: none;
            color: black;
            padding: 7px 8px 7px 8px;
            box-shadow: inset 1px 1px 4px #F1F1F1;
            -moz-box-shadow: inset 1px 1px 4px #F1F1F1;
            -webkit-box-shadow: inset 1px 1px 4px #F1F1F1;
            background: #e7feff;
            width: 20%;
            font-size: 20px;
            top: 277px;
            left: 210px;
            text-align: center;
            position: absolute;
        }
        .form-style-3 input[type=type7]{
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border: 1px solid #4169e1;
            outline: none;
            color: black;
            padding: 7px 8px 7px 8px;
            box-shadow: inset 1px 1px 4px #F1F1F1;
            -moz-box-shadow: inset 1px 1px 4px #F1F1F1;
            -webkit-box-shadow: inset 1px 1px 4px #F1F1F1;
            background: #e7feff;
            width: 20%;
            font-size: 20px;
            top: 325px;
            left: 209px;
            text-align: center;
            position: absolute;
        }
        .form-style-1 input[type=type7]{
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border: 1px solid #4169e1;
            outline: none;
            color: black;
            padding: 7px 8px 7px 8px;
            box-shadow: inset 1px 1px 4px #F1F1F1;
            -moz-box-shadow: inset 1px 1px 4px #F1F1F1;
            -webkit-box-shadow: inset 1px 1px 4px #F1F1F1;
            background: #e7feff;
            width: 20%;
            font-size: 20px;
            top: 325px;
            left: 209px;
            text-align: center;
            position: absolute;
        }
        .form-style-3 input[type=type8]{
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border: 1px solid #4169e1;
            outline: none;
            color: black;
            padding: 7px 8px 7px 8px;
            box-shadow: inset 1px 1px 4px #F1F1F1;
            -moz-box-shadow: inset 1px 1px 4px #F1F1F1;
            -webkit-box-shadow: inset 1px 1px 4px #F1F1F1;
            background: #e7feff;
            width: 20%;
            font-size: 20px;
            top: 375px;
            left: 209px;
            text-align: center;
            position: absolute;
        }
        .form-style-2 input[type=type8]{
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border: 1px solid #4169e1;
            outline: none;
            color: black;
            padding: 7px 8px 7px 8px;
            box-shadow: inset 1px 1px 4px #F1F1F1;
            -moz-box-shadow: inset 1px 1px 4px #F1F1F1;
            -webkit-box-shadow: inset 1px 1px 4px #F1F1F1;
            background: #e7feff;
            width: 20%;
            font-size: 20px;
            top: 375px;
            left: 209px;
            text-align: center;
            position: absolute;
        }
        .form-style-3 input[type=type9]{
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border: 1px solid #4169e1;
            outline: none;
            color: black;
            padding: 7px 8px 7px 8px;
            box-shadow: inset 1px 1px 4px #F1F1F1;
            -moz-box-shadow: inset 1px 1px 4px #F1F1F1;
            -webkit-box-shadow: inset 1px 1px 4px #F1F1F1;
            background: #e7feff;
            width: 20%;
            font-size: 20px;
            top: 425px;
            left: 209px;
            text-align: center;
            position: absolute;
        }
        .form-style-2 input[type=type9]{
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border: 1px solid #4169e1;
            outline: none;
            color: black;
            padding: 7px 8px 7px 8px;
            box-shadow: inset 1px 1px 4px #F1F1F1;
            -moz-box-shadow: inset 1px 1px 4px #F1F1F1;
            -webkit-box-shadow: inset 1px 1px 4px #F1F1F1;
            background: #e7feff;
            width: 20%;
            font-size: 20px;
            top: 425px;
            left: 209px;
            text-align: center;
            position: absolute;
        }
        input[type=type2]{
            text-align: center;
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border: 1px solid #4169e1;
            outline: none;
            color: black;
            padding: 7px 8px 7px 8px;
            box-shadow: inset 1px 1px 4px #F1F1F1;
            -moz-box-shadow: inset 1px 1px 4px #F1F1F1;
            -webkit-box-shadow: inset 1px 1px 4px #F1F1F1;
            background: #e7feff;
            width:20%;
            margin-top: 30px;
            margin-left: -305px;
            font-size: 20px;
            position: static;
        }
        input[type=type3]{
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border: 1px solid #4169e1;
            outline: none;
            color: black;
            padding: 7px 8px 7px 8px;
            box-shadow: inset 1px 1px 4px #F1F1F1;
            -moz-box-shadow: inset 1px 1px 4px #F1F1F1;
            -webkit-box-shadow: inset 1px 1px 4px #F1F1F1;
            background: #e7feff;
            width:20%;
            text-align: center;
            margin-top: 10px;
            margin-left: 15px;
            font-size: 20px;
            position: static;
        }
        input[type=type4]{
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border: 1px solid #4169e1;
            outline: none;
            color: black;
            padding: 7px 8px 7px 8px;
            box-shadow: inset 1px 1px 4px #F1F1F1;
            -moz-box-shadow: inset 1px 1px 4px #F1F1F1;
            -webkit-box-shadow: inset 1px 1px 4px #F1F1F1;
            background: #e7feff;
            width:20%;
            text-align: center;
            margin-top: 10px;
            margin-left: 15px;
            font-size: 20px;
            position: static;
        }
        input[type=type5]{
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border: 1px solid #4169e1;
            outline: none;
            color: black;
            padding: 7px 8px 7px 8px;
            box-shadow: inset 1px 1px 4px #F1F1F1;
            -moz-box-shadow: inset 1px 1px 4px #F1F1F1;
            -webkit-box-shadow: inset 1px 1px 4px #F1F1F1;
            background: #e7feff;
            width:20%;
            text-align: center;
            margin-top: 10px;
            margin-left: 15px;
            font-size: 20px;
            position: static;
        }
         input[type=radio]{
            width: 20px;
            height: 25px;
            float: left;
         }
        .form-style-3 input{
            right: 70px;
        }
        .form-style-2 input{
            right: 70px;
        }
        .form-style-1 input{
            right: 70px;
        }
        .form-style-3 select[name=emp_id101]{
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
            width:50%;
            margin: 25px;
            left: -170px;
            position: relative;
            font-size: 17px;
        }
        .form-style-2 select[name=emp_id101]{
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
            width:50%;
            margin: 25px;
            left: -170px;
            position: relative;
            font-size: 17px;
        }
        .form-style-3 [class="radio1"]{
            margin-top: 2px;
            margin-left: 5px;
        }
        .form-style-2 [class="radio1"]{
            margin-top: 2px;
            margin-left: 5px;
        }
        .form-style-3 [class="radio2"]{
            margin-top: 1px;
            margin-left: 250px;
        }
        .form-style-2 [class="radio2"]{
            margin-top: 1px;
            margin-left: 250px;
        }
        label [for="field1"]{
            margin-left: 25px;
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
        .form-style-2  input[type=submit]{
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
        .form-style-1  input[type=submit]{
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

       
            
        $tchhrs = "";
        $rghrs = "";
        $ovrhrs = "";
        $value = "";
        
        $date_edited= "";
        

            if(isset($_POST["calculate"])){
                $tchhrs = 0;
                $rghrs = 0;
                $ovrhrs = 0;
                $payrate = 150;
                $value;
                
                

                if($_POST["rglrweek1"] >=6 && $_POST["rglrweek1"] <=40 && $_POST["rglrweek2"] >=6 && $_POST["rglrweek2"] <=40 &&
                $_POST["rglrweek3"] >=6 && $_POST["rglrweek3"] <=40 && $_POST["rglrweek4"] >=6 && $_POST["rglrweek4"] <40){

                    $rghrs = (($_POST["rglrweek1"] + $_POST["rglrweek2"] + $_POST["rglrweek3"] + $_POST["rglrweek4"])
                                * $payrate);
                }
                else{
                    echo "You entered wrong regular hours! ";
                }

                if($_POST["ovrweek1"] <= 5 && $_POST["ovrweek2"] <= 5 && $_POST["ovrweek3"] <= 5 && $_POST["ovrweek4"] <= 5){

                    $ovrhrs = $_POST["ovrweek1"] + $_POST["ovrweek2"] + $_POST["ovrweek3"] + $_POST["ovrweek4"];
                }
                else{
                    echo "You entered wrong overtime hours! ";
                }

                if(isset($_POST["emp_id101"])){
                    $value = $_POST["emp_id101"];
                }

                $tchhrs = $rghrs + $ovrhrs;
                $date_edited = $_POST["date_edited"];
                
                
            }
            $pay = "";
            $employee_id1 = "";

        if(isset($_POST["total"])){
            $allwnc = $_POST['allwnce'];


            if($allwnc == "Yes"){
                $pay = 0;
                $payrate = 150;
                $montlypay = 25760;
                $totalallwnc = 0;
                $toaldeduct = 0;
                $basicpay = 0;
                $totalovertm = 0;
                $reghrs1 = $_POST["reghrs"];
                $overhrs1 = $_POST["overhrs"];
                $tchhrs =  $_POST["tchhrs"];
                $date_edited;
               
                

                //allowance
                $totalallwnc =  $montlypay * 0.10;

                //absences
                $totaldeduct = $_POST["deduct"] * $payrate;

                //overtime
                $totalovertm = $overhrs1 * ($payrate * 1.4);

                //total amount
                $pay = ($reghrs1 + $totalovertm + $totalallwnc) - $totaldeduct;
                $employee_id1 = $_POST["employee_id1"];
                
            }
            else if ($allwnc == "No"){
                $pay = 0;
                $payrate = 150;
                $toaldeduct = 0;
                $totalovertm = 0;
                $reghrs1 = $_POST["reghrs"];
                $overhrs1 = $_POST["overhrs"];
                $tchhrs =  $_POST["tchhrs"];


                //absences
                $totaldeduct = $_POST["deduct"] * $payrate;

                //overtime
                $totalovertm = $overhrs1 * ($payrate * 1.4);

                //total amount
                $pay = ($reghrs1 + $totalovertm) - $totaldeduct;

                $employee_id1 = $_POST["employee_id1"];
            }
        }

           
        ?>

        
<?php

        $mysqli = new mysqli('localhost', 'jhey.vill', 'akosijellyann05', 'teaching_record') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM `salary`")
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
                        <th>Salary</th>
                        <th>Date Computed</th>
                        <th colspan="2">Action</th>
                    </tr> 
                </thead>
            <?php
                while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['emp_id']; ?></td>
                    <td><?php echo $row['pay']; ?></td>
                    <td><?php echo $row['datecomp']; ?></td>
                    <td>
                        <a href="teachingemployee_payroll.php?edit=<?php echo $row['payroll_id']; ?>"
                            ><button type="button" class="button-info">Edit</button></a>
                        <a href="teachingpayrollprocess.php?delete=<?php echo $row['payroll_id']; ?>"
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
        <form action="" method="POST">

    <fieldset><legend>Calculation of Teaching Hours</legend>
    <input type="hidden" name="payroll_id" value="<?php echo $payroll_id; ?>">

    <label for="field1"><span>Employee ID <span class="required">*</span></span>
                <select name="emp_id101" class="input-field">
                    <?php
                        $hostname = "localhost";
                        $username = "jhey.vill";
                        $password = "akosijellyann05";
                        $databaseName = "teaching_record";

                        $connect = mysqli_connect($hostname, $username, $password, $databaseName);
                        $query = "SELECT `employee_id` FROM `data`";

                        $result = mysqli_query($connect, $query);
                    ?>
                    <option> -- Select Employee ID -- </option>
                    <?php while ($row = mysqli_fetch_array($result)):;?>
                    <option><?php echo $row[0];?></option>
                    <?php endwhile;?>
                </select>

            <label for="field8"><span> Date </span>
                <input type ="type" name ="date_edited" class ="input-field"
                value="<?php date_default_timezone_set('Asia/Manila'); $today = date("F j, Y - g:i a"); 
                        echo $today; ?>" readonly>

            <label for="field2"><span>Teaching Hours </span>
            <br /><label for="field2"><span>Regular Hours <span class="required">*</span></span>
            <label for="field2"><span>Overtime Hours <span class="required">*</span></span>
            
                <input type ="type2" name ="rglrweek1" class ="input-field" placeholder ="week 1">
                <br /><input type ="type3" name ="rglrweek2" class ="input-field" placeholder ="week 2">
                <br /><input type ="type4" name ="rglrweek3" class ="input-field" placeholder ="week 3">
                <br /><input type ="type5" name ="rglrweek4" class ="input-field" placeholder ="week 4">

                <input type ="type1" name ="ovrweek1" class ="input-field" placeholder ="week 1">
                <input type ="type7" name ="ovrweek2" class ="input-field" placeholder ="week 2">
                <input type ="type8" name ="ovrweek3" class ="input-field" placeholder ="week 3">
                <input type ="type9" name ="ovrweek4" class ="input-field" placeholder ="week 4">

                <p> Note: Regular Hours (min. 6 hrs & max. 40 hrs per week) </p>
                <p> Note: Overtime Hours (max. 5 hrs per week) </p>

                <label for="calc"><span> </span><input type="submit" name="calculate" value="calculate"></label>

                </form>
       
       </div>


       <div class="form-style-2">
        <form action="" method="POST">

    <fieldset><legend>Final Calculation for Payroll</legend>
    <input type="hidden" name="payroll_id" value="<?php echo $payroll_id; ?>">

    
            <label for="field5"><span> Have Allowance? <span class="required">*</span></span>
                <input type ="radio" name ="allwnce" class ="radio1" value="Yes">
            <label for="yess">Yes</label>
                <input type ="radio" name ="allwnce" class ="radio2" value="No"><label for="noo">No</label>
            <label for="field6"><span> Absent Hours <span class="required">*</span></span>
                <input type ="type" name ="deduct" class ="input-field" placeholder ="Enter the Deduction Hours">
            
            <label for="field14"><span> Employee ID </span>
                <input type ="type" name ="employee_id1" class ="input-field" placeholder ="(calculate the teaching hrs)"
                value="<?php echo $value; ?>" readonly>
            <label for="field9"><span> Total Regular Hours </span>
                <input type ="type" name ="reghrs" class ="input-field" placeholder ="(calculate the teaching hrs)"
                value="<?php echo $rghrs; ?>" readonly>
            <label for="field10"><span> Total OverTime Hours </span>
                <input type ="type" name ="overhrs" class ="input-field" placeholder ="(calculate the teaching hrs)"
                value="<?php echo $ovrhrs; ?>" readonly>
            <label for="field3"><span> Total Teaching Hours </span>
                <input type ="type" name ="tchhrs" class ="input-field" placeholder ="(calculate the teaching hrs)"
                value="<?php echo $tchhrs; ?>" readonly>
            <label for="field4"><span> Payrate per hour</span>
                <input type ="type" name ="payrate" class ="input-field" value="₱150.00" readonly>
            
            <label><span> </span><input type="submit" name="total" value="Total"></label>
        </form>
        </div>


        
        <div class="form-style-1">
            <form action="teachingpayrollprocess.php" method="POST">

            <fieldset><legend>Teaching Employee Payroll</legend>
            <input type="hidden" name="payroll_id" value="<?php echo $payroll_id; ?>">

            <label for="field14"><span> Employee ID </span>
                <input type ="type" name ="emp_id" class ="input-field" placeholder ="(selected emp id)"
                value="<?php echo $employee_id1; ?>" >
            <label for="field7"><span> Salary</span>
                <input type ="type" name ="pay" class ="input-field" placeholder ="Total Salary" value="<?php echo "₱ " . $pay; ?>" readonly>
            <label for="field15"><span> Date Computed <span class="required">*</span></span>
                <input type ="type" name ="datecomp" class ="input-field"
                value="<?php date_default_timezone_set('Asia/Manila'); $today = date("F j, Y - g:i a"); 
                        echo $today; ?>" readonly>

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
        </div>
    </body>
</html>