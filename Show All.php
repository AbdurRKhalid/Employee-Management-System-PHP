
<Html>


<head>


</head>

<body>
    <table align="center">
        <tr>
            <th>Employee Id</th>
            <th>Employee Name</th>
            <th>Employee Social Security Id</th>
            <th>Employee Department</th>
            <th>Employee Salary</th>
            <th>Employee Address</th>
        </tr>

        <?php

        $connection = new mysqli("localhost","root","");
        $select_db = mysqli_select_db($connection,'record');
        $View_Query = "SELECT * From emp_record";
        $Execution_Result = mysqli_query($connection,$View_Query);
        while ($DataRows = mysqli_fetch_array($Execution_Result)) {
            $Employee_Id = $DataRows['id'];
            $Employee_Name = $DataRows['ename'];
            $Employee_Ssn = $DataRows['ssn'];
            $Employee_Department = $DataRows['dept'];
            $Employee_Salary = $DataRows['salary'];
            $Employee_Address = $DataRows['homeadd'];
        ?>

        <tr>
            <td> <?php echo $Employee_Id ?> </td>
            <td> <?php echo $Employee_Name ?> </td>
            <td> <?php echo $Employee_Ssn ?> </td>
            <td> <?php echo $Employee_Department ?> </td>
            <td> <?php echo $Employee_Salary ?> </td>
            <td> <?php echo $Employee_Address ?> </td>
            <td style="color: red"> <a href="Delete.php?Delete=<?php echo $DataRows['id']; ?>"> Delete</a> </td>
            <td style="color: yellow">  <a href="Update%201.php?Update=<?php echo $DataRows['id']; ?>"> Update</a> </td>
        </tr>

        <?php } ?>

    </table>
</body>


</Html>
