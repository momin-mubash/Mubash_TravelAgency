<?php
 $con=mysqli_connect('localhost','root');
 if($con){
 	echo " connection successful";
 }else{
 	echo "no connection";
 }
 mysqli_select_db($con,'users');
 $user = $_POST['user'];
 $email = $_POST['email'];
 $mobile = $_POST['mobile'];
 $comments = $_POST['comments'];

 $user = $_POST['user'];

$query="insert into userinfodata(user,email,mobile,comments) 
values('$user','$email','$mobile','$comments')";


mysqli_query($con,$query);
header('location:index.php');
?>