<?php
function delItem($emailId,$todo_id){
  global $db;
  $query= 'delete from todo_list where id=:todo_id and email_id=:email';

   $statement = $db-> prepare($query);
     $statement->bindValue(':email',$emailId);
       $statement->bindValue(':todo_id',$todo_id);
       $statement->execute();
       $statement->closeCursor();

}
function addItem($email, $itemname,$description,$date,$time){
 global $db;
 $query = 'insert into todo_list(email_id,itemname,description,date,time,complete) values (:email,:name,:desc,:date,:time,:complete)';
  $statement = $db-> prepare($query);
  $statement->bindValue(':email',$email);
  $statement->bindValue(':name',$itemname);
  $statement->bindValue(':desc',$description);
  $statement->bindValue(':date',$date);
  $statement->bindValue(':time',$time);
  $statement->bindValue(':complete',0);
  $statement->execute();
  $statement->closeCursor();

}

function editItem($email, $itemname,$description,$date,$time,$id) {
global $db;
 $query = 'update todo_list set itemname=:name,description=:desc,date=:date,time=:time where email_id=:email and id=:id';
  $statement = $db-> prepare($query);
  $statement->bindValue(':email',$email);
  $statement->bindValue(':name',$itemname);
  $statement->bindValue(':desc',$description);
  $statement->bindValue(':date',$date);
  $statement->bindValue(':time',$time);
  $statement->bindValue(':id',$id);
  $statement->execute();
  $statement->closeCursor();
}

function updateItem($email, $id) {
global $db;
 $query = 'update todo_list set complete=:complete where email_id= :email and id= :id';
  $statement = $db-> prepare($query);
  $statement->bindValue(':email',$email);
  $statement->bindValue(':id',$id);
  $statement->bindValue(':complete',1);
  $statement->execute();
  $statement->closeCursor();
}

function getItem($emailId){
 global $db;
 $query = 'select * from todo_list where email_id= :emailId';
 $statement = $db-> prepare($query);
 $statement->bindValue(':emailId',$emailId);
 $statement->execute();
 $result=$statement->fetchAll();
 $statement->closeCursor();
 return $result;
}

function createUser($email,$firstname,$lastname,$pass){   
 global $db;
 $query = 'select * from users where email_id = :email';
$statement = $db-> prepare($query);
$statement->bindValue(':email',$email);
$statement->execute();
$result=$statement->fetchAll();
$statement->closeCursor();
$count = $statement->rowCount();
if($count > 0)
{
return true;
}else{
$query = 'insert into users (email_id,first_name,last_name,password) values (:email, :fname, :lname, :pass)';
$statement = $db-> prepare($query);
$statement->bindValue(':email',$email);
$statement->bindValue(':fname',$firstname);
$statement->bindValue(':lname',$lastname);
$statement->bindValue(':pass',$pass);
$statement->execute();
$statement->closeCursor();
return false;
}

}
function isUserValid($username,$password,$firstname,$lastname){
  global $db;
  $query = 'select * from users where email_id = :name and password = :pass';
  $statement = $db->prepare($query);
  $statement->bindValue(':name',$username);
  $statement->bindValue(':pass',$password);
  $statement->execute();
  $result = $statement->fetchAll();
  $statement->closeCursor();
  $count=$statement->rowCount();
  if($count == 1) {
   setcookie('firstname',$result[0]['first_name']);
  
   setcookie('lastname',$result[0]['last_name']);   
   
   setcookie('userid',$result[0]['email_id']);
   setcookie('my_id',$result[0]['id']);
   setcookie('islogged',true);
   return true;
 }else{
 unset($_COOKIE['firstname']);
 unset($_COOKIE['lastname']);
  unset($_COOKIE['userid']);
 setcookie('firstname',false);
 setcookie('lastname',false);
 setcookie('islogged',false);
 setcookie('my_id',false);
  setcookie('id',false);
 return false;
 }
 }
 
 function isEmailValid($username){
  global $db;
  $query = 'select * from users where email_id = :name';
  $statement = $db->prepare($query);
  $statement->bindValue(':name',$username);
  $statement->execute();
  $result = $statement->fetchAll();
  $statement->closeCursor();
  $count=$statement->rowCount();
  if($count == 1) {
   return true;
 }else{
 return false;
 }
 }
 
 function getcookie($name) {
    $cookies = [];
    $headers = headers_list();
    foreach($headers as $header) {
        if (strpos($header, 'Set-Cookie: ') === 0) {
            $value = str_replace('&', urlencode('&'), substr($header, 12));
            parse_str(current(explode(';', $value, 1)), $pair);
            $cookies = array_merge_recursive($cookies, $pair);
        }
    }
    return $cookies[$name];
}
 
 ?>
