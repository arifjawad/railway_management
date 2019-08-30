<?php

$conn= mysqli_connect("localhost", "root","", "railway_management");

if($conn->connect_error){

  die("connection failed:". $conn-> connect_error);

}

if(isset($_POST['submit']))
{
	$name =$_POST['passenger_name'];

	$passport_no= $_POST['passport_number'];
	$country= $_POST['country'];

}

$sql = "INSERT INTO passenger(passenger_name, passport_number,country) VALUES ('$name','$passport_no','$country')";
$result = $conn->query($sql);
$conn->close();
 ?>


 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>registration</title>
       <link rel="stylesheet" type="text/css" href="user_profile.css">

     <style>
        body{ background-image:linear-gradient(rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.3)),url(pictures/index.jpg);
        height: 100vh;
        background-size: cover;
        background-position: center;
        font-family: sans-serif;
        margin: 0;
        padding: 0;
      }

     </style>


   <body>

     <h1>Assigned!!! </h1>


   </body>
    </head>
   <html>
