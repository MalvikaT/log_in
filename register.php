<html>
<head>

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
.reg-label{
  display: inline-block !important;
  width: 120px;
  color:white;
  font-size:20px;
  font-weight:bold;
  font-family: 'Yrsa', serif;
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
.text-field{
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

input[type="radio"] + label {
  color:white;
  font-size:20px;
  font-weight:bold;
  font-family: 'Yrsa', serif;
}


</style>
</head>
<body>
<div class="container" style="height:680px;">

 <<h1 class="heading-style">User Sign Up</h1>
 <form method = 'post' action = 'index.php'>
 <div align="center">
  <label class="reg-label"> First Name: </label><input class="text-field" type="text" name="firstname" value="" required/> </br> <br>
 <label class="reg-label"> Last Name: </label><input class="text-field" type="text" name="lastname" value="" required/> </br> <br>
  <label class="reg-label">  Email: </label><input class="text-field" type="text" name="email" value="" required/> </br> <br>
 <label class="reg-label"> Password: </label><input class="text-field" type="password" name="password" value="" required/> </br><br>
 <label class="reg-label">  Phone: </label><input class="text-field" type="text" name="phone_num" value="" required/> </br> <br>
  <label class="reg-label">  Birthday: </label><input class="text-field" type="date" name="birthday" value="" required/> </br> <br>
  <label class="reg-radio">  Gender: </label>
                            <input type="radio" name="gender" id="female"><label for "female">Female</label>
                            <input type="radio" name="gender" id="male"><label for "male">Male</label>
                            

  <input type="hidden" name="action" value="registrar" /></br></br>
  <input id = "submit_style" type="submit" value="Register" />
 </form>
 <form action="login.php" method = "post">
  <input id = "submit_style" type='submit' value='Login'/>
  
 </form>
 </div>
 </div>
</body>
</html>
