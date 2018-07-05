<?php
$EN = $_POST['ename'];
$Ssn = $_POST['ssn'];
$Dept = $_POST['dept'];
$Salary = intval($_POST['salary']);
$HomeAdd = $_POST['homeadd'];

$connection = new mysqli("localhost","root","");
$select_db = mysqli_select_db($connection,'record');

$update_Query = "UPDATE emp_record SET ename = '$EN', ssn = '$Ssn', dept='$Dept', salary='$Salary', homeadd='$HomeAdd'";
$Execeution_Result = mysqli_query($connection,$update_Query);

if ($Execeution_Result) {
    echo "The database has been updated Successfully";
} else {
    echo "The Database has not been updated!";
}
?>