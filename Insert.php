<?php

        $EN = $_POST['ename'];
        $Ssn = $_POST['ssn'];
        $Dept = $_POST['dept'];
        $Salary = intval($_POST['salary']);
        $HomeAdd = $_POST['homeadd'];

        $connection = new mysqli("localhost","root","");
        $select_db = mysqli_select_db($connection,'record');

        $Insert_Query = "INSERT INTO emp_record(ename,ssn,dept,salary,homeadd) 
        VALUES ('$EN', '$Ssn', '$Dept', $Salary, '$HomeAdd')";
        $Execeution_Result = mysqli_query($connection,$Insert_Query);

        if ($Execeution_Result) {
            echo "The Data has Been Added into the Database";
        } else {
            echo "The Data has Not Added into the Database";
        }
