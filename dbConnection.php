<?php
//all the variables defined here are accessible in all the files that include this one
$con = new mysqli('localhost','root','','work_load')or die("Could not connect to mysql".mysqli_error($con));
//$con = "https://slelearn.000webhostapp.com/dbConnection.php";
//<script src="https://slelearn.000webhostapp.com/dbConnection.php"></script>
?>