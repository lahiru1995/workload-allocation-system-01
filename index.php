<!DOCTYPE html>
<html>
<!--------------rederect login----------------->



<head>
<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/main.css" type="text/css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<style><?php include 'css/main.css'; ?></style>

</head>
<body>

<!-- ------------------------------------top nav bar------------------------------------------------>
<div class="navbar">
  <a href="#home" style="font-weight: bold">Workload Allocation System</a>
  <div class="right">
  <div class="dropdown">
  <img src="images/img-avatars/avatar.png" alt="Avatar" class="avatar">
    <button style="font-size: 14px; font-weight: bold" class="dropbtn">User 123 
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
  <a <?php if(@$_GET['q']==1) echo'style="color: white; background-color: gray"'; ?>href="index.php?q=1">Dashboard</a>
  <a <?php if(@$_GET['q']==2) echo'style="color: white; background-color: gray"'; ?> href="index.php?q=2">Reasearch</a>
  <a <?php if(@$_GET['q']==3) echo'style="color: white; background-color: gray"'; ?> href="index.php?q=3">Administration</a>
  <a <?php if(@$_GET['q']==4) echo'style="color: white; background-color: gray"'; ?> href="index.php?q=4">Professional</a>
  <a <?php if(@$_GET['q']==5) echo'style="color: white; background-color: gray"'; ?> href="index.php?q=5">Leave</a>

  <button class="dropdown-btn"
  <?php if(@$_GET['q']==6) echo'style="color: white; background-color: gray"'; ?>href="index.php?q=6"
  <?php if(@$_GET['q']==7) echo'style="color: white; background-color: gray"'; ?>href="index.php?q=7"
  <?php if(@$_GET['q']==8) echo'style="color: white; background-color: gray"'; ?>href="index.php?q=8"
  <?php if(@$_GET['q']==9) echo'style="color: white; background-color: gray"'; ?>href="index.php?q=9"
  <?php if(@$_GET['q']==10) echo'style="color: white; background-color: gray"'; ?>href="index.php?q=10"
  <?php if(@$_GET['q']==11) echo'style="color: white; background-color: gray"'; ?>href="index.php?q=11"
  >Teaching 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a <?php if(@$_GET['q']==6) echo'style="color: white; background-color: #569ef0;"'; ?>href="index.php?q=6">Global Course Coordination</a>
    <a  <?php if(@$_GET['q']==7) echo'style="color: white; background-color: #569ef0;"'; ?>href="index.php?q=7">Semester Teaching</a>
    <a <?php if(@$_GET['q']==8) echo'style="color: white; background-color: #569ef0;"'; ?>href="index.php?q=8">SIM Semester Teaching</a>
    <a <?php if(@$_GET['q']==9) echo'style="color: white; background-color: #569ef0;"'; ?>href="index.php?q=9">Online Teaching</a>
    <a <?php if(@$_GET['q']==10) echo'style="color: white; background-color: #569ef0;"'; ?>href="index.php?q=10">SUIBE Teaching</a>
    <a <?php if(@$_GET['q']==11) echo'style="color: white; background-color: #569ef0;"'; ?>href="index.php?q=11">T&L allowance</a>
  </div>

  <a <?php if(@$_GET['q']==12) echo'style="color: white; background-color: gray"'; ?>href="index.php?q=12">Calculater</a>
</div>
<!-- ------------------------------------------------------------------------------------------>
<!-- ------------------------------------content------------------------------------------------>
<div class="main">

<?php if(@$_GET['q']==1) {
echo '<h2>Workload Summary</h2>
<table id="customers">
<tr>
  <th>Category</th>
  <th>Actual</th>
  <th>Present of Activity</th>
  <th>Indicative FTE WL</th>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
</table>

<div class="chart1"><canvas id="doughnut-chart" width="800" height="300"></canvas></div>

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
echo '<div class="table1">
<h2>Teaching & Teaching-Related</h2>
<table id="customers">
<h3>Global Course Coordination</h3>
<tr>
  <th>Employee Number</th>
  <th>Allocation Name</th>
  <th>Hours</th>
  <th>Employee Number</th>
  <th>Allocation Name</th>
  <th>Hours</th>
  <th>Employee Number</th>
  <th>Allocation Name</th>
  <th>Hours</th>
  <th>Employee Number</th>
  <th>Allocation Name</th>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
</table>
</div>
<ul>
   <li>Each hour of face-to-face teaching delivery attracts an additional two teaching-related hours for preparation, marking, feedback. See School Academic Workload Model for details.</li>
</ul>
';
}?>

<?php if(@$_GET['q']==7) {
echo '<div class="table1">
<h2>Teaching & Teaching-Related</h2>
<table id="customers">
<h3>Semester One Teaching</h3>
<tr>
  <th>Course Code</th>
  <th>Description</th>
  <th>Activity type name</th>
  <th>Schedule date</th>
  <th>Schedule start Ti</th>
  <th>Duration</th>
  <th>Class cap</th>
  <th>Weeks</th>
  <th>Workload hours</th>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
</table>
</div>
';

echo '<div class="table1">
<table id="customers">
<h3>Semester Two Teaching</h3>
<tr>
  <th>Course Code</th>
  <th>Description</th>
  <th>Activity type name</th>
  <th>Schedule date</th>
  <th>Schedule start Ti</th>
  <th>Duration</th>
  <th>Class cap</th>
  <th>Weeks</th>
  <th>Workload hours</th>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
</table>
</div>
';
}?>

<?php if(@$_GET['q']==8) {
echo '<div class="table1">
<h2>Teaching & Teaching-Related</h2>
<table id="customers">
<h3>SIM Semester One Teaching</h3>
<tr>
  <th>Course Code</th>
  <th>Course Coordinator / Offering Coordinator</th>
  <th>Meeting attendee
  Skype attendees highlighted in green</th>
  <th>Visiting Lecturer</th>
  <th>First time Visit to SIM? Y/N (For HR purposes)</th>
  <th>Visiting Staff Member Permanent or Casual</th>
  <th>sum Workload Hours</th>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
</table>
</div>
';

echo '<div class="table1">
<table id="customers">
<h3> SIM Semester Two Teaching</h3>
<tr>
  <th>Course Code</th>
  <th>Course Coordinator / Offering Coordinator</th>
  <th>Meeting attendee
  Skype attendees highlighted in green</th>
  <th>Visiting Lecturer</th>
  <th>First time Visit to SIM? Y/N (For HR purposes)</th>
  <th>Visiting Staff Member Permanent or Casual</th>
  <th>sum Workload Hours</th>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
</table>
</div>
';
}?>


<?php if(@$_GET['q']==9) {
echo '<div class="table1">
<h2>Teaching & Teaching-Related</h2>
<table id="customers">
<h3>Online Teaching 1</h3>
<tr>
  <th>Melb Course Code</th>
  <th>OUA Course Code</th>
  <th>Course Name</th>
  <th>Study Session</th>
  <th>Delivary Staff</th>
  <th>E No</th>
  <th>Hours</th>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
</table>
</div>
';

echo '<div class="table1">
<table id="customers">
<h3>Online Teaching 2</h3>
<tr>
  <th>Melb Course Code</th>
  <th>OUA Course Code</th>
  <th>Course Name</th>
  <th>Study Session</th>
  <th>Delivary Staff</th>
  <th>E No</th>
  <th>Hours</th>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
</table>
</div>
';
}
?>


<?php if(@$_GET['q']==10) {
echo '<div class="table1">
<h2>Teaching & Teaching-Related</h2>
<table id="customers">
<h3>SUIBE teaching 1</h3>
<tr>
  <th>Course Code</th>
  <th>Course</th>
  <th>Visiting Lecture</th>
  <th>sum Workload Hours</th>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
</table>
</div>
';

echo '<div class="table1">
<table id="customers">
<h3>SUIBE teaching 2</h3>
<tr>
  <th>Course Code</th>
  <th>Course</th>
  <th>Visiting Lecture</th>
  <th>sum Workload Hours</th>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
</table>
</div>
';
}
?>

<?php if(@$_GET['q']==11) {
echo '<div class="table1">
<h2>Teaching & Teaching-Related</h2>
<table id="customers">
<h3>T&L allowance</h3>
<tr>
  <th>Employee No</th>
  <th>Allocation Name</th>
  <th>Notice</th>
  <th>Hours</th>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
</table>
</div>
';
}
?>


<?php if(@$_GET['q']==12) {
echo '<h2>Workload Summary - Calculater</h2>
<table id="customers">
<tr>
  <th>Category</th>
  <th>Actual</th>
  <th>Present of Activity</th>
  <th>Indicative FTE WL</th>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
</table>

';

echo '
  <div class="table-flex">

  <div class="table1" style="margin-right: 5px">
  <table id="customers">
<tr>
  <th>Pic a Course</th>
  <th>Semester</th>
  <th>Total coodination <br>Hours</th>
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
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
</table>
  </div>

  <div class="table1" style="margin-left: 5px">
  <table id="customers">
<tr>
  <th>Location</th>
  <th>Actual Teaching hours</th>
  <th>Teaching Related Allocation</th>
  <th>Total per Hours</th>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
</table>
  </div>
  </div>


  <div class="forminput">
  <h3 style="text-align:center; margin-bottom: 30px"> Category hours can be amended by making changes to the following:</h3>
  <form action="/action_page.php">
  <div class="one-row">

    <div class="one-field">
    <label for="fname">Teaching &Teaching-Related</label>
    <input type="text" id="fname" name="firstname" placeholder="Enter + or - value">
    </div>
    <div class="one-field" style="padding:0px 5px 0px 10px">
    <label for="fname">Course Coordination</label>
    <input type="text" id="fname" name="firstname" placeholder="Enter + or - value">
    </div>
    <div class="one-field" style="padding:0px 10px 0px 5px">
    <label for="fname">Other L&T Activities</label>
    <input type="text" id="fname" name="firstname" placeholder="Enter + or - value">
    </div>
    <div class="one-field">
    <label for="fname">HDR Supervision</label>
    <input type="text" id="fname" name="firstname" placeholder="Enter + or - value">
    </div>

  </div>
  <div class="one-row">

  <div class="one-field">
  <label for="fname">Research</label>
  <input type="text" id="fname" name="firstname" placeholder="Enter + or - value">
  </div>
  <div class="one-field" style="padding:0px 5px 0px 10px">
  <label for="fname">Leadership / Admin</label>
  <input type="text" id="fname" name="firstname" placeholder="Enter + or - value">
  </div>
  <div class="one-field" style="padding:0px 10px 0px 5px">
  <label for="fname">Prof/Comm Engagement</label>
  <input type="text" id="fname" name="firstname" placeholder="Enter + or - value">
  </div>
  <div class="one-field">
  <label for="fname">Leave</label>
  <input type="text" id="fname" name="firstname" placeholder="Enter + or - value">
  </div>

</div>
  
<div class="one-row">

  <div class="one-field" style="padding:0px 10px 0px px">
    <input type="submit" value="Calculate">
  </div>
  <div class="one-field" style="padding:0px 0px 0px 10px">
    <button class="button1" style="width: 100%; background-color: #569ef0;">Send Approval Request to Advicer</button>
  </div>
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
