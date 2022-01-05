<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <title>Admin Login</title>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
        <form action="#">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" required>
          </div>
          <div class="pass"> <input type="checkbox" name="" id=""> <a href="#" style="text-decoration: none;">Remember</a></div>
          <div class="row button">
            <input type="submit" value="Login">
          </div>
          <div class="signup-link">This is only for <a href="#" style="text-decoration: none;">Admin</a></div>
        </form>
      </div>
    </div>

  </body>
</html>
