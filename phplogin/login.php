<html>
<head>
<title> User Login and Registration</title>
<link rel="stylesheet" type="text/css" href="style1.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
</head>
<body class="body-register">
<div class="container">
<div class="login-box">
<div class="row">
<div class="col-md-6 login-left">
   <h2>Login here </h2>
   <form action="validation.php" method="Post">
   <div class="form-group">
   <label>Username</label>
   <input type="text" name="user" class="form-control" required>
   </div>
   <div class="form-group">
   <label>Password</label>
   <input type="password" name="password" class="form-control" required>
   </div>
   <button type="submit" class="btn btn-primary">Login</button>
   </form>
</div>
<div class="col-md-6 login-right">
   <h2>Register here </h2>
   <form action="registration.php" method="Post">
   <div class="form-group">
   <label>Username</label>
   <input type="text" name="user" class="form-control" required>
   </div>
   <div class="form-group">
   <label>Password</label>
   <input type="password" name="password" class="form-control" required>
   </div>
   <button type="submit" class="btn btn-primary">Register</button>
   </form>
</div>
</div>
</div>
</div>
</body>
</html>