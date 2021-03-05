<!DOCTYPE html>
<html>


<head>
<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/main.css" type="text/css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<style><?php include 'css/main.css'; ?></style>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="css/login/all.min.css">
 <link rel="stylesheet" href="css/login/adminlte.min.css">
 <link rel="stylesheet" href="css/login/icheck-bootstrap.min.css">
  
 <?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>

</head>
<body class="hold-transition login-page" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5)), url('images/RMIT.jpg');
   background-size: cover;">

<h2 style="color:white"><b>Sign in</b></h2>
<div class="login-box">
  <div class="login-logo">
    <a href="#" class="text-white"></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body" style="border-radius: 5px;">
      <form action="login1.php?q=login.php" method="POST">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" id="email" required placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" required placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="form-group mb-3">
          <label for="">Sign in as</label>
          <select name="login" id="" class="custom-select custom-select-sm">
            <option value="0">Staff Member</option>
            <option value="1">Workplan Advisor</option>
            <option value="2">Admin</option>
          </select>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>



</body>
</html>