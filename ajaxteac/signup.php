<?php
include('connection.php');

    $name =$_POST['name'];
    $email =$_POST['email'];
    $dpn =$_POST['dpn'];
    $password=$_POST['password'];

    $query=$db->prepare('INSERT INTO tech(name,email,dpn,Password) VALUES(?,?,?,?)');
    $data=array($name,$email,$dpn,$password);
    $execute=$query->execute($data); 
    if ($execute) {
         echo "data inserted successfully"; 
    }
    else {
       echo "data not inserted";
    }
?>