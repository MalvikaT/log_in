<html>
<head>
<meta charset="UTF-8">
  <title>Welcome to to-do list application</title>
  <style>
  @import url('https://fonts.googleapis.com/css?family=Yrsa');
  body{
  background-image: url('images/image.jpg');
}
  .heading-style{
  font-family: 'Yrsa', serif;
  font-size: 50px;
  color: white;
  text-align: center;
}

input[type=text], input[type=password] {
    width: 30%;
    padding: 12px 5px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 10px 0;
    border: none;
    cursor: pointer;
    width: 30%;
}

</style>
  </head>
<body>
<div class="body">

<br>
<h1 class="heading-style"> Sign In</h1>
<div align="center">
<form method ="post" action="index.php">
<div class="container">
<input type="text" placeholder = "Enter Email ID" name="email" value=""/><br>
<input type="password" placeholder = "Enter Password" name="password" value=""/><br>
<input type="hidden" name="action" value="login_act"/><br>
<input type="submit" value="Login"/>
</form>
<form action= "register.php">
 <input type="submit" value="Register New User"/>
</form>
</div>
</div>
</body>
</html>
