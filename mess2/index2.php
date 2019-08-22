<?php
include_once "config.php";
$user=$_SESSION['user'];
session_start();
 if(isset($_POST['no1'])){
$user=$_SESSION['user'];
    
    
   
    $date0=DATE('y-m-d');
     $query = "INSERT INTO feedback (name, response, date0, time0) VALUES ('$user' ,'no' , '$user', 0);";
    $result= mysqli_query($mysqli, $query);
}
    

    if(isset($_POST['no'])){
$user=$_SESSION['user'];
    
    
   
    $date0=DATE('y-m-d');
     $query = "INSERT INTO feedback (name, response, date0, time0) VALUES ('$user' ,'no' , '$user', 1);";
    $result= mysqli_query($mysqli, $query);
}
if(isset($_POST['yes1'])){
$user=$_SESSION['user'];
    
    
   
    $date0=DATE('y-m-d');
     $query = "INSERT INTO feedback (name, response, date0, time0) VALUES ('$user' ,'yes' , '$user', 0);";
    $result= mysqli_query($mysqli, $query);
}
if(isset($_POST['yes'])){
$user=$_SESSION['user'];
    
    
   
    $date0=DATE('y-m-d');
     $query = "INSERT INTO feedback (name, response, date0, time0) VALUES ('$user' ,'yes' , '$user', 1);";
    $result= mysqli_query($mysqli, $query);
}

  
 header("Location : index.php");

    ?>