<?php 
include('connection.php');
session_start();

$email1=$_POST['email1'];
$password1=$_POST['password1'];

$query=$db->prepare('SELECT * FROM tech where password=?');
$data=array($password1);
$execute=$query->execute($data); 

if($query->rowcount()>0){
     while ($datarow=$query->fetch()) {
        if($datarow['email']==$email1){ 
        $_SESSION['name']=$datarow['name'];
        echo 0;
        }
    }
}
        else{
            echo "incorrect username and password";
        }

?>