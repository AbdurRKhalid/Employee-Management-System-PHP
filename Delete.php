<?php

    $connection = new mysqli("localhost","root","");
    $select_db = mysqli_select_db($connection,'record');
    $get_Id_to_delete = $_GET["Delete"];

    $Delete_Query = "DELETE From emp_record WHERE id = '$get_Id_to_delete'";
    $Execution_Result = mysqli_query($connection,$Delete_Query);
    if ($Execution_Result) {
        echo "The Employee has been deleted from the Database";
    } else {
        echo "The Employee has not been deleted from the Database";
    }

?>