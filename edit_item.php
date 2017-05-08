<?php
require('header.php');
?>
<html>
<head>
<style>
  @import url('https://fonts.googleapis.com/css?family=Yrsa');
  body{
  background-image: url('images/image.jpg');
}

  .header{
  font-family: 'Yrsa', serif;
  font-size: 30px;
  color: white;
  text-align: center;
}

.ed-label{
  display: inline-block !important;
  width: 100px;
  color:white;
  font-size:18px;
  font-weight:bold;
  font-family: 'Yrsa', serif;
}

 input[type=submit]{
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 5px 0;
    border: none;
    cursor: pointer;
    width: 50%;
}
    .btn{
    background-color: #4CAF50;
    color: white;
    padding: 14px 0px;
    margin: 5px 0;
    border: none;
    cursor: pointer;
    width: 30%;
    }
</style>
</head>
<body>
    <h1 class="header">Edit Item</h1>
    <form action="index.php" method="post" id="edit_item_form">
        <input type="hidden" name="action" value="edit">
        <input type="hidden" name="id_edit" value="<?php echo $editId; ?>">
      <table>
      <table align="center">
      <tr>
       <td> <label class="ed-label">Item name:</label></td>
        <td><input class="inpt" type="text" name="itemname" /></td>
        
      </tr>
      <tr><td>  <label class="ed-label">Description:</label></td>
       <td> <input class="inpt" type="text" name="description" /></td>
        </tr>

       <tr><td> <label class="ed-label">Due Date:</label></td>
       <td>  <input class="inpt" type="date" name="date" /></td>
        

       <tr><td> <label class="ed-label">Due Time:</label></td>
       <td>  <input class="inpt" type="time" name="time" /></td></tr>
        

        <label>&nbsp;</label>
       <tr><td> <input class="btn" type="submit" value="Edit" /></td>
       <td> <a href="javascript:history.go(-1)"><button class="btn" type="button">Cancel</button></a></td></tr>
        <br>
        </table>
    </form>
    

</body>
</html>