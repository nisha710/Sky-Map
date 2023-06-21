<?php

$con =mysqli_connect('localhost','root','Nisha@111','youtubeuserdata');

if($con){
    echo "Connection successful";
}else{
    echo "No connection";
}
7
mysqli_select_db($con, 'youtubeuserdata');

$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comment=$_POST['comment'];

$query="insert into userinfodataa (user,email,mobile,
comment) values ('$user','$email','$mobile','$comment')";

echo "$query";
mysqli_query($con,$query);

?>