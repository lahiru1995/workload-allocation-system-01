<!DOCTYPE html>
<html>
<!--------------rederect login----------------->



<head>
<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/main.css" type="text/css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<style><?php include 'css/main.css'; ?></style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>
<body>

<!-- ------------------------------------top nav bar------------------------------------------------>
<div class="navbar">
  <a href="#home" style="font-weight: bold">Workload Allocation System - Admin</a>
  <div class="right">
  <div class="dropdown">
  <img src="images/img-avatars/avatar.png" alt="Avatar" class="avatar">
    <button style="font-size: 14px; font-weight: bold" class="dropbtn">Admin 123 
      <i class="fa fa-caret-down" style="margin-left: 5px"></i>
    </button>
    <div class="dropdown-content">
      <a id="myBtn" href="#">Profile</a>
      <a href="logout.php?q=login.php">Logout</a>
      <a href="#">Link 3</a>
    </div>
  </div> </div>
</div>
<!-- ------------------------------------slide nav bar------------------------------------------------>
<div class="sidenav">
  <a <?php if(@$_GET['q']==1) echo'style="color: white; background-color: gray"'; ?>href="admin.php?q=1">Dashboard</a>
  <a <?php if(@$_GET['q']==12) echo'style="color: white; background-color: gray"'; ?>href="admin.php?q=12">Workload Allocation</a>

  <button class="dropdown-btn"
  <?php if(@$_GET['q']==6) echo'style="color: white; background-color: gray"'; ?>href="admin.php?q=6"
  <?php if(@$_GET['q']==7) echo'style="color: white; background-color: gray"'; ?>href="admin.php?q=7"
  >Staff Members 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a <?php if(@$_GET['q']==6) echo'style="color: white; background-color: #569ef0;"'; ?>href="admin.php?q=6">Add New</a>
    <a  <?php if(@$_GET['q']==7) echo'style="color: white; background-color: #569ef0;"'; ?>href="admin.php?q=7">List</a>
  </div>

  <button class="dropdown-btn"
  <?php if(@$_GET['q']==8) echo'style="color: white; background-color: gray"'; ?>href="admin.php?q=8"
  <?php if(@$_GET['q']==9) echo'style="color: white; background-color: gray"'; ?>href="admin.php?q=9"
  >Workplan Advicers 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a <?php if(@$_GET['q']==8) echo'style="color: white; background-color: #569ef0;"'; ?>href="admin.php?q=8">Add New</a>
    <a  <?php if(@$_GET['q']==9) echo'style="color: white; background-color: #569ef0;"'; ?>href="admin.php?q=9">List</a>
  </div>

  <button class="dropdown-btn"
  <?php if(@$_GET['q']==10) echo'style="color: white; background-color: gray"'; ?>href="admin.php?q=10"
  <?php if(@$_GET['q']==11) echo'style="color: white; background-color: gray"'; ?>href="admin.php?q=11"
  >Users ( Admin ) 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a <?php if(@$_GET['q']==10) echo'style="color: white; background-color: #569ef0;"'; ?>href="admin.php?q=10">Add New</a>
    <a  <?php if(@$_GET['q']==11) echo'style="color: white; background-color: #569ef0;"'; ?>href="admin.php?q=11">List</a>
  </div>

</div>
<!-- ------------------------------------------------------------------------------------------>
<!-- ------------------------------------content------------------------------------------------>
<div class="main">

<?php if(@$_GET['q']==1) {
echo '<h2>Admin Dashboard</h2>


';

//$result = mysqli_query($con,"SELECT * FROM user") or die('Error');
/*echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>College</b></td><td><b>Email</b></td><td><b>Mobile</b></td><td></td></tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
	$name = $row['name'];
	$mob = $row['mob'];
	$gender = $row['gender'];
    $email = $row['email'];
	$college = $row['college'];

	echo '<tr><td>'.$c++.'</td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$college.'</td><td>'.$email.'</td><td>'.$mob.'</td>
	<td><a title="Delete User" href="update.php?demail='.$email.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td></tr>';
}
$c=0;
echo '</table></div></div>';*/
}?>

<?php if(@$_GET['q']==2) {
echo '<h2>Research</h2>
<div class="table1"><table id="customers">
<tr>
  <th>Total Research Hours</th>
  <th>00</th>
</tr>
</table> 
<ul>
   <li>Adjusted pro-rata for part-time fraction or when you have leave 
   (annual leave excepted) and any other adjustments.</li>
</ul>
</div>';

echo '<div class="table1">
<table id="customers">
<tr>
  <th>eNumber</th>
  <th>HDR Hours</th>
  <th>Associate  Supervisor</th>
  <th>Joint Senior Supervisor</th>
  <th>Senior Supervisor</th>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
</table>
<ul>
   <li>HDR Supervision data is sourced from RMITs official HDR Supervision Register, which is exported from Research Master. There can be lag between the agreement is made and this is reflected in reports.</li><br>
   <li>The data in your workload profile will only be updated based on what is in the HDR Supervision Register - if you believe there are errors in the data and that these errors are not associated with lag, 
   please contact the Business Research Office to amend.</li>
</ul>
</div>';
}?>


<?php if(@$_GET['q']==3) {
echo '<h2>Administration / Leadership</h2>
<div class="table1">
<table id="customers">
<tr>
  <th>Standard Administration / Leadership Allocation</th>
  <th>00</th>
</tr>
</table> 
<ul>
   <li>Administration and leadership should list all internal leadership / administrative roles and committee memberships which you undertake.</li>
   <li>If you are undertaking a task which does not appear below, please email it to the Manager, Planning & Resources, cc your line manager.</li><br>
   <li>This allocation covers attendance at staff meetings, Open Day, Graduation, the school conference and other School events / meetings.</li>
   <li>This allocation also covers at least one administrative task or committee membership which contributes to the School - if you do not yet have such a task, you should suggest one you would like to take to your line.</li>
</ul>
</div>';

echo '<div class="table1">
<h3>Leadership Roles</h3>
<table id="customers">
<tr>
  <th>Employe Number</th>
  <th>Allocation Name</th>
  <th>Hours</th>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
</table>
</div>';
}?>


<?php if(@$_GET['q']==4) {
echo '<h2>Professional / comunity engagement</h2>
<div class="table1">
<table id="customers">
<tr>
  <th>Standard Professional / Community Engagement Allocation</th>
  <th>00</th>
</tr>
</table> 
<ul><li>Normally 184 hours for full-time, adjusted pro-rata for part-time fraction or when you have leave (annual leave excepted).</li></ul>
</div>';

echo '<div class="table1">
<h3>Professional / Community Engagement Roles</h3>
<table id="customers">
<tr>
  <th>Employee Number</th>
  <th>Allocation Name</th>
  <th>Hours</th>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
</table>
</div>';
}?>

<?php if(@$_GET['q']==5) {
echo '<div class="table1">
<h2>Leave</h2>
<table id="customers">
<tr>
  <th>Employee Number</th>
  <th>Allocation Name</th>
  <th>Hours</th>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
</table>
</div>
<ul>
   <li>This section does not list annual leave - only Research Leave, Long Service Leave, Parental Leave, Leave Without Pay or extended periods of Sick Leave.</li>
    <li>Annual leave is factored into your normal annualised teaching hours (1656hrs for a full-time member of staff).</li>
    <li> A leave allocation above reduces targets and standard allocations for all parameters (research, teaching, etc.) on a pro-rata basis.</li>
</ul>
';
}?>

<?php if(@$_GET['q']==6) {
echo '
<h2>New Staff Member</h2>
';

echo '
  <div class="forminput" style="padding-top: 40px; padding-bottom: 20px">
  <form action="/action_page.php">

  <div class="one-row">
  <div class="one-field" style="padding:0px 10px 0px 0px">
  <div class="avatar-wrapper" style="margin:  33px auto;">
	<img class="profile-pic" src="" />
	<div class="upload-button">
		<i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
	</div>
	<input class="file-upload" type="file" accept="image/*"/>
  </div>
  <label for="fname">Email :</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    <label for="fname">Password :</label>
    <input type="text" id="fname" name="firstname" placeholder="">
  </div>

  
    <div class="one-field">
    <label for="fname">Staff Member Name</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    <label for="fname">Employee No:</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    <label for="fname">Position</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    <label for="fname">F T E</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    <label for="fname">Work plan Advicer</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    </div>


    <input type="submit" value="ADD">
  </form>
</div>
';
}
?>

<?php if(@$_GET['q']==7) {
echo '<div class="table1">
<h2>Teaching & Teaching-Related</h2>
<table id="customers">
<tr>
  <th>Employee No:</th>
  <th>Staff Member Name</th>
  <th>Email</th>
  <th>Position</th>
  <th>F T E</th>
  <th>Work plan Advicer</th>
  <th>Action</th>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td><div class="dropdownacc">
  <button class="dropbtn-action">Action<i class="fa fa-caret-down" style="margin-left: 5px"></i></button>
  <div class="dropdownacc-content">
  <a href="admin.php?q=12">Manage</a>
  <a href="#">Edit</a>
  <a href="#">Delete</a>
  </div>
</div>
</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td><div class="dropdownacc">
  <button class="dropbtn-action">Action<i class="fa fa-caret-down" style="margin-left: 5px"></i></button>
  <div class="dropdownacc-content">
  <a href="admin.php?q=12">Manage</a>
  <a href="#">Edit</a>
  <a href="#">Delete</a>
  </div>
</div>
</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td><div class="dropdownacc">
  <button class="dropbtn-action">Action<i class="fa fa-caret-down" style="margin-left: 5px"></i></button>
  <div class="dropdownacc-content">
  <a href="admin.php?q=12">Manage</a>
  <a href="#">Edit</a>
  <a href="#">Delete</a>
  </div>
</div>
</td>
</tr>
</table>
</div>
';

}?>

<?php if(@$_GET['q']==8) {
echo '
<h2>New Workplan Advicer</h2>
';

echo '
  <div class="forminput" style="padding-top: 40px; padding-bottom: 20px">
  <form action="/action_page.php">

  <div class="one-row">
  <div class="one-field" style="padding:0px 10px 0px 0px">
  <div class="avatar-wrapper" style="margin:  80px auto;">
	<img class="profile-pic" src="" />
	<div class="upload-button">
		<i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
	</div>
	<input class="file-upload" type="file" accept="image/*"/>
  </div>
  
  </div>
    <div class="one-field">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    <label for="fname">Employee No:</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    <label for="fname">Position</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    <label for="fname">Email :</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    <label for="fname">Password :</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    </div>


    <input type="submit" value="ADD">
  </form>
</div>
';
}?>


<?php if(@$_GET['q']==9) {
echo '<div class="table1">
<h2>Teaching & Teaching-Related</h2>
<table id="customers">
<tr>
  <th>Name</th>
  <th>Employee No</th>
  <th>Position</th>
  <th>Email</th>
  <th>Password</th>
  <th>Action</th>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td><div class="dropdownacc">
  <button class="dropbtn-action">Action<i class="fa fa-caret-down" style="margin-left: 5px"></i></button>
  <div class="dropdownacc-content">
  <a href="#">Edit</a>
  <a href="#">Delete</a>
  </div>
</div>
</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td><div class="dropdownacc">
  <button class="dropbtn-action">Action<i class="fa fa-caret-down" style="margin-left: 5px"></i></button>
  <div class="dropdownacc-content">
  <a href="#">Edit</a>
  <a href="#">Delete</a>
  </div>
</div>
</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td><div class="dropdownacc">
  <button class="dropbtn-action">Action<i class="fa fa-caret-down" style="margin-left: 5px"></i></button>
  <div class="dropdownacc-content">
  <a href="#">Edit</a>
  <a href="#">Delete</a>
  </div>
</div>
</td>
</tr>
</table>
</div>
';

}
?>


<?php if(@$_GET['q']==10) {
echo '
<h2>New Workplan Advicer</h2>
';

echo '
  <div class="forminput" style="padding-top: 40px; padding-bottom: 20px">
  <form action="/action_page.php">

  <div class="one-row">
  <div class="one-field" style="padding:0px 10px 0px 0px">
  <div class="avatar-wrapper" style="margin:  50px auto;">
	<img class="profile-pic" src="" />
	<div class="upload-button">
		<i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
	</div>
	<input class="file-upload" type="file" accept="image/*"/>
  </div>
  
  </div>
    <div class="one-field">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    <label for="fname">Employee No:</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    <label for="fname">Email :</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    <label for="fname">Password :</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    </div>


    <input type="submit" value="ADD">
  </form>
</div>
';
}
?>

<?php if(@$_GET['q']==11) {
echo '<div class="table1">
<h2>Teaching & Teaching-Related</h2>
<table id="customers">
<tr>
  <th>Name</th>
  <th>Employee No</th>
  <th>Email</th>
  <th>Password</th>
  <th>Action</th>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td><div class="dropdownacc">
  <button class="dropbtn-action">Action<i class="fa fa-caret-down" style="margin-left: 5px"></i></button>
  <div class="dropdownacc-content">
  <a href="#">Edit</a>
  <a href="#">Delete</a>
  </div>
</div>
</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td><div class="dropdownacc">
  <button class="dropbtn-action">Action<i class="fa fa-caret-down" style="margin-left: 5px"></i></button>
  <div class="dropdownacc-content">
  <a href="#">Edit</a>
  <a href="#">Delete</a>
  </div>
</div>
</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td><div class="dropdownacc">
  <button class="dropbtn-action">Action<i class="fa fa-caret-down" style="margin-left: 5px"></i></button>
  <div class="dropdownacc-content">
  <a href="#">Edit</a>
  <a href="#">Delete</a>
  </div>
</div>
</td>
</tr>
</table>
</div>
';
}
?>


<?php if(@$_GET['q']==12) {
echo '<h2>Workload Allocation</h2>
';
echo '<div class="forminput">
<h2></h2>
</div>';
echo '
  <div class="forminput">
  <h3 style="text-align:center; margin-bottom: 30px">Teaching and Teaching Related</h3>
 
  <form action="/action_page.php">

  <!--------------------------------------------------------Global Course Coordination---------->
  <h4 style="font-size:15px">Global Course Coordination</h4>
  <div class="one-row">
    <div class="one-field" style="padding:0px 5px 0px 0px">
    <label for="fname">Course code</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Semester</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Allocation Melbourne</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Allocation OUA</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">RMIT online</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 0px 0px 5px">
    <label for="fname">Allocation SIM</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
  </div>

  <div class="one-row">
  <div class="one-field" style="padding:0px 5px 0px 0px">
    <label for="fname">Allocation VM</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Allocation SUIBE</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Allocation UPH</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Extra WIL</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 0px 0px 5px">
    <label for="fname">Cordination Hours</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname"></label>
    </div>
    </div>
  <hr>

  <!--------------------------------------------------------Semester One Teaching---------->
  <h4 style="font-size:15px">Semester One Teaching</h4>
  <div class="one-row">
    <div class="one-field" style="padding:0px 5px 0px 0px">
    <label for="fname">Course code</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Description</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Activity Type</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Scheduled Dates</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 0px 0px 5px">
    <label for="fname">Scheduled Start time</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
  </div>

  <div class="one-row">
    <div class="one-field" style="padding:0px 5px 0px 0px">
    <label for="fname">Duration</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Class Gap</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Number of Teaching Weeks</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 0px 0px 5px">
    <label for="fname">Workload hours</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname"></label>
    </div>
  </div>
  <hr>

  <!--------------------------------------------------------Semester Two Teaching---------->
  <h4 style="font-size:15px">Semester Two Teaching</h4>
  <div class="one-row">
    <div class="one-field" style="padding:0px 5px 0px 0px">
    <label for="fname">Course code</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Description</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Activity Type</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Scheduled Dates</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 0px 0px 5px">
    <label for="fname">Scheduled Start time</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
  </div>

  <div class="one-row">
    <div class="one-field" style="padding:0px 5px 0px 0px">
    <label for="fname">Duration</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Class Gap</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Number of Teaching Weeks</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 0px 0px 5px">
    <label for="fname">Workload hours</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname"></label>
    </div>
  </div>
  <hr>

  <!--------------------------------------------------------SIM Semester One Teaching---------->
  <h4 style="font-size:15px">SIM Semester One Teaching</h4>
  <div class="one-row">
    <div class="one-field" style="padding:0px 5px 0px 0px">
    <label for="fname">Course code</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Course Coordinator</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Meeting atendees</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Visiting Lecture</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 0px 0px 5px">
    <label for="fname">First Time visit to SIM</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
  </div>

  <div class="one-row">
    <div class="one-field" style="padding:0px 5px 0px 0px">
    <label for="fname">Visiting Staff Member</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Sum Workload Hours</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname"></label>
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname"></label>
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname"></label>
    </div>
  </div>
  <hr>

  <!--------------------------------------------------------SIM Semester Two Teaching---------->
  <h4 style="font-size:15px">SIM Semester Two Teaching</h4>
  <div class="one-row">
    <div class="one-field" style="padding:0px 5px 0px 0px">
    <label for="fname">Course code</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Course Coordinator</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Meeting atendees</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Visiting Lecture</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 0px 0px 5px">
    <label for="fname">First Time visit to SIM</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
  </div>

  <div class="one-row">
    <div class="one-field" style="padding:0px 5px 0px 0px">
    <label for="fname">Visiting Staff Member</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Sum Workload Hours</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname"></label>
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname"></label>
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname"></label>
    </div>
  </div>
  <hr>

  <!--------------------------------------------------------Online Teaching 1---------->
  <h4 style="font-size:15px">Online Teaching 1</h4>
  <div class="one-row">
    <div class="one-field" style="padding:0px 5px 0px 0px">
    <label for="fname">Melb Course code</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">OUA Course Code</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Course Name</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Study Session</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 0px 0px 5px">
    <label for="fname">Delivary Staff</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
  </div>

  <div class="one-row">
    <div class="one-field" style="padding:0px 5px 0px 0px">
    <label for="fname">E No.</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Hours</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname"></label>
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname"></label>
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname"></label>
    </div>
  </div>
  <hr>

  <!--------------------------------------------------------Online Teaching 2---------->
  <h4 style="font-size:15px;">Online Teaching 2</h4>
  <div class="one-row">
    <div class="one-field" style="padding:0px 5px 0px 0px">
    <label for="fname">Melb Course code</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">OUA Course Code</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Course Name</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Study Session</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 0px 0px 5px">
    <label for="fname">Delivary Staff</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
  </div>

  <div class="one-row">
    <div class="one-field" style="padding:0px 5px 0px 0px">
    <label for="fname">E No.</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Hours</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname"></label>
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname"></label>
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname"></label>
    </div>
  </div>
  <hr>

  <!--------------------------------------------------------SUIBE Teaching 1---------->
  <h4 style="font-size:15px;">SUIBE Teaching 1</h4>
  <div class="one-row">
    <div class="one-field" style="padding:0px 5px 0px 0px">
    <label for="fname">Course code</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Course</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Visiting Lecture</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Sum of workload Hours</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname"></label>
    </div>
  </div>
  <hr>

  <!--------------------------------------------------------SUIBE Teaching 2---------->
  <h4 style="font-size:15px;">SUIBE Teaching 2</h4>
  <div class="one-row">
    <div class="one-field" style="padding:0px 5px 0px 0px">
    <label for="fname">Course code</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Course</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Visiting Lecture</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Sum of workload Hours</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname"></label>
    </div>
  </div>
  <hr>

  <!--------------------------------------------------------T&L Allowance---------->
  <h4 style="font-size:15px;">T&L Allowance</h4>
  <div class="one-row">
    <div class="one-field" style="padding:0px 5px 0px 0px">
    <label for="fname">Employee No.</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Allocation Name</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Notes</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname">Hours</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname"></label>
    </div>
  </div>
  <hr>

    <input type="submit" value="S a v e">
  </form>
</div>

';

echo '
  <div class="forminput">
  
 
  <form action="/action_page.php">

  <h4 style="font-size:15px">Leave</h4>
  <div class="one-row">
    <div class="one-field" style="padding:0px 5px 0px 0px">
    <label for="fname">Allocation Name Long Service Leave</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 0px 0px 5px">
    <label for="fname">Hours</label>
    <input type="text" id="fname" name="firstname" placeholder="">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname"></label>
    </div>
    <div class="one-field" style="padding:0px 5px 0px 5px">
    <label for="fname"></label>
    </div>
  </div>
  <hr>

  <h4 style="font-size:15px">Research</h4>
  <div class="one-row">
  <div class="one-field">
  <label for="fname">HDR Hours</label>
  <input type="text" id="fname" name="firstname" placeholder="">
  </div>
  <div class="one-field" style="padding:0px 5px 0px 10px">
  <label for="fname">Associate  Supervisor</label>
  <input type="text" id="fname" name="firstname" placeholder="">
  </div>
  <div class="one-field" style="padding:0px 5px 0px 5px">
  <label for="fname">Joint Senior Supervisor</label>
  <input type="text" id="fname" name="firstname" placeholder="">
  </div>
  <div class="one-field" style="padding:0px 0px 0px 5px">
  <label for="fname">Senior Supervisor</label>
  <input type="text" id="fname" name="firstname" placeholder="">
  </div>
</div>
<hr>

<h4 style="font-size:15px">Administration</h4>
  <div class="one-row">
  <div class="one-field">
  <label for="fname">Standard Administration </label>
  <input type="text" id="fname" name="firstname" placeholder="">
  </div>
  <div class="one-field" style="padding:0px 5px 0px 10px">
  <label for="fname">Allocation Name</label>
  <input type="text" id="fname" name="firstname" placeholder="">
  </div>
  <div class="one-field" style="padding:0px 0px 0px 5px">
  <label for="fname">Hours</label>
  <input type="text" id="fname" name="firstname" placeholder="">
  </div>
  <div class="one-field" style="padding:0px 5px 0px 5px">
  <label for="fname"></label>
  </div>
</div>
<hr>

<h4 style="font-size:15px">Professional/ community Engagement</h4>
  <div class="one-row">
  <div class="one-field">
  <label for="fname">Standard Professional</label>
  <input type="text" id="fname" name="firstname" placeholder="">
  </div>
  <div class="one-field" style="padding:0px 5px 0px 10px">
  <label for="fname">Allocation Name</label>
  <input type="text" id="fname" name="firstname" placeholder="">
  </div>
  <div class="one-field" style="padding:0px 0px 0px 5px">
  <label for="fname">Hours</label>
  <input type="text" id="fname" name="firstname" placeholder="">
  </div>
  <div class="one-field" style="padding:0px 5px 0px 5px">
  <label for="fname"></label>
  </div>
</div>
<hr>


    <input type="submit" value="S a v e">
  </form>
</div>

';

}
?>
</div>


<!--------------------------------- The Modal-------------------------------------- -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Staff Member details</h2>
    </div>
    <div class="modal-body">
      <p>Name</p>
      <p>Employee No.</p>
       <p>Position</p>
      <p>F T E.</p>
      <p>Workplan Advisor</p>
    </div>
    <div class="modal-footer">
      <h3></h3>
    </div>
  </div>

</div>

<!-- ------------------------------------------------------------------------------------------>
<!-- ------------------------------------footer------------------------------------------------>
<div class="footer">
  <p class="footerp">Copyright © 2021 <a target="_blank" class="fa" href="http://engeniasolutions.com.au/">Engeniasolutions.</a> All rights reserved.</p>
</div>

<!-- ------------------------------------avatar upload------------------------------------------------>
<script>
  $(document).ready(function() {
	
  var readURL = function(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
              $('.profile-pic').attr('src', e.target.result);
          }
  
          reader.readAsDataURL(input.files[0]);
      }
  }
 
  $(".file-upload").on('change', function(){
      readURL(this);
  });
  
  $(".upload-button").on('click', function() {
     $(".file-upload").click();
  });
});
  </script>
<!-- ------------------------------------pop up box------------------------------------------------>
<script>

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;
for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}

/*---------------chart1------------------------------------*/
new Chart(document.getElementById("doughnut-chart"), {
    type: 'doughnut',
    data: {
      labels: ["01", "02", "03", "04", "05"],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [2478,5267,734,784,433]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: '- - - - - - - - - - -'
      }
    }
});

</script>

</body>
</html>
