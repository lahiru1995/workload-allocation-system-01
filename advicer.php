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
  <a href="#home" style="font-weight: bold">Workload Allocation System - Advicer</a>
  <div class="right">
  <div class="dropdown">
  <img src="images/img-avatars/avatar.png" alt="Avatar" class="avatar">
    <button style="font-size: 14px; font-weight: bold" class="dropbtn">Advicer 123 
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
  <a <?php if(@$_GET['q']==1) echo'style="color: white; background-color: gray"'; ?>href="advicer.php?q=1">Dashboard</a>
  <a <?php if(@$_GET['q']==2) echo'style="color: white; background-color: gray"'; ?>href="advicer.php?q=2">Requests</a>

  
</div>
<!-- ------------------------------------------------------------------------------------------>
<!-- ------------------------------------content------------------------------------------------>
<div class="main">

<?php if(@$_GET['q']==1) {
echo '<h2>Advicer Dashboard</h2>


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
echo '<h2>Request for Approval</h2>';

echo '<div class="table1">
<table id="customers">
<tr>
  <th>Name</th>
  <th>Employee No.</th>
  <th>Position</th>
  <th>Action</th>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>
  <a href="advicer.php?q=3" style="text-decoration: none; font-weight: bold">VIEW</a>
</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>
  <a href="advicer.php?q=3" style="text-decoration: none; font-weight: bold">VIEW</a>
</td>
</tr>
<tr>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>
  <a href="advicer.php?q=3" style="text-decoration: none; font-weight: bold">VIEW</a>
</td>
</tr>
</table>
</div>';
}?>


<?php if(@$_GET['q']==3) {
echo '<h2>Request</h2>';

echo '<div class="forminput" style="justify-content: space-around; display:flex">
<h4 style="font-size: 16px"> Name: abcdef </h4>
<h4 style="font-size: 16px"> Employee No: abcdef </h4>
<h4 style="font-size: 16px"> Position: abcdef </h4>
<h4 style="font-size: 16px"> FTE: abcdef </h4>
</div>';

echo'
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

<div style="display:flex; float: right;">
<button style="width:100px; margin-right: 5px" class="button1">Approve</button>
<button style="width:100px; margin-left: 5px" class="button1">Cancel</button></div>
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
