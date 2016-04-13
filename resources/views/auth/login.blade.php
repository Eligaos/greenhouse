<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Greenhouse Control</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/geral.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
</head>
<body>
   <div class="container-fluid">
  <div class="row">
   <div class="Absolute-Center is-Responsive">
      <div id="logo-container"></div>
      <div class="col-sm-12 col-md-10 col-md-offset-1">
      <div style="text-align: center">
        <span style="font-weight: bold">Please Login</span> <span>Or</span>
       <a href="/register"><button class="btn btn-xs btn-primary " type="submit">Register</button></a>
    </div>
        <form action="" id="loginForm">
          <div class="form-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span></span>
            <input class="form-control" type="text" name='username' placeholder="username"/>          
          </div>
          <div class="form-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>

            <input class="form-control" type="password" name='password' placeholder="password"/>     
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> Remember me</a>
            </label>
          </div>

          <div style="text-align: center;">
            <button type="button" class="btn btn-def btn-block" >Login</button>
          </div>
          <div class="form-group text-center">
            <a href="#">Forgot Password</a>
          </div>
        </form>        
      </div>  
    </div>    
  </div>
</div>
</body>
<script src="js/jquery-2.1.4.js"></script>
<script src="js/angular.js"></script>
<script src="js/bootstrap.js"></script>
</html>