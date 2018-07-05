<?php

    $connection = new mysqli("localhost","root","");
    $select_db = mysqli_select_db($connection,'record');

    $Id_for_update = $_GET['Update'];

    $Already_Present_Query = "SELECT * From emp_record WHERE id = '$Id_for_update' ";
    $Execution_Result = mysqli_query($connection,$Already_Present_Query);

    while ($Data = mysqli_fetch_array($Execution_Result)) {
        $Name = $Data['ename'];
        $SSN = $Data['ssn'];
        $Department = $Data['dept'];
        $Salary = $Data['salary'];
        $Address = $Data['homeadd'];
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update the Existing Employee</title>
</head>
<body>

    <form action="Update%202.php" method="post">
    <fieldset>
    <label>Enter the Name of Employee</label>
    <br>
    <input type="text" name="ename" value="<?php echo $Name; ?>">
    <br>
    <label>Enter the Social Security Number of Employee</label>
    <br>
    <input type="text" name="ssn" value="<?php echo $SSN; ?>">
    <br>
    <label>Enter the Department of Employee</label>
    <br>
    <input type="text" name="dept" value="<?php echo $Department; ?>">
    <br>
    <label>Enter the Salary of Employee</label>
    <br>
    <input type="text" name="salary" value="<?php echo $Salary; ?>">
    <br>
    <label>Enter the Address of the Employee</label>
    <br>
    <input type="text" name="homeadd" value="<?php echo $Address; ?>">
    <br>
    <br>
    <input type="submit" value = "Add to The Database.">
    </fieldset>
    </form>

</body>
</html>
