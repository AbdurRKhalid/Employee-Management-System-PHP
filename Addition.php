<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add New Employee</title>
</head>
<body>

    <form action="Insert.php" method="POST">
    <fieldset>
    <label>Enter the Name of Employee</label>
    <br>
    <input type="text" name="ename">
    <br>
    <label>Enter the Social Security Number of Employee</label>
    <br>
    <input type="text" name="ssn">
    <br>
    <label>Enter the Department of Employee</label>
    <br>
    <input type="text" name="dept">
    <br>
    <label>Enter the Salary of Employee</label>
    <br>
    <input type="text" name="salary">
    <br>
    <label>Enter the Address of the Employee</label>
    <br>
    <input type="text" name="homeadd">
    <br>
    <br>
    <input type="submit" value = "Add to The Database.">
    </fieldset>
    </form>

</body>
</html>