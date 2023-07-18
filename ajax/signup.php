<?php
include('connection.php');
if (password_verify("signup",$_POST['token'])) {

    $name =$_POST['name'];
    $email =$_POST['email'];
    $Password=$_POST['Password'];

    $query=$db->prepare('INSERT INTO data(name,email,Password) VALUES(?,?,?)');
    $data=array($name,$email,$Password);
    $execute=$query->execute($data); 
    if ($execute) {
         echo "data inserted successfully";
    }
    else {
       echo "data not inserted";
    }
}
?>
