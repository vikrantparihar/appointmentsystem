<?php 
include('connection.php');
session_start();
if (password_verify("getdata",$_POST['token'])) {
$useremail=$_POST['useremail'];
$password1=$_POST['password1'];

$query=$db->prepare('SELECT * FROM data where email=?');
$data=array($useremail);
$execute=$query->execute($data); 

if($query->rowcount()>0){
     while ($datarow=$query->fetch()) {
        if($datarow['Password']==$password1){ 
        $_SESSION['name']=$datarow['name'];
        echo 0;
        }
    }
}
        else{
            echo "incorrect password or username";
        }
}
?>