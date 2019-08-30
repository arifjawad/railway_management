<?php

$conn= mysqli_connect("localhost", "root","", "railway_management");

if($conn->connect_error){

  die("connection failed:". $conn-> connect_error);

}

if(isset($_POST['submit']))
{
	$name =$_POST['name'];
	$email= $_POST['email'];
	$passport_no= $_POST['passportno'];
	$country= $_POST['country'];
	$dep_from= $_POST['depfrom'];
	$dep_to= $_POST['depto'];
	$date= $_POST['date'];
	$seatno= $_POST['seat'];
	$class= $_POST['class'];
}

$sql = "INSERT INTO booking(passenger_name, email, passport_number,country,dep_from,dep_to,date,seat,class) VALUES ('$name','$email','$passport_no','$country','$dep_from','$dep_to','$date','$seatno','$class')";
$result = $conn->query($sql);
$conn->close();
 ?>

  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Flights</title>
        <link rel="stylesheet" type="text/css" href="index.css">



    </head>
    <body>


        <header>
      <style>
      table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 80%;
      }

      td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
      }

      tr:nth-child(even) {
        background-color: #dddddd;
      }
      </style>
<div class="hero">
  <h1  >your ticket will be confirmed after pay</h1><br></div>
  <h2 >Available Tickets:</h2>

  <table>
    <tr>
      <th>Ticket No:</th>
      <th>price:</th>
      <th>Seat type</th>
      <th>Available Tickets:</th>

    </tr>
    <div>
    <a href="index.html"> HOME</a>
  </div>


  <?php


  $conn= mysqli_connect("localhost", "root","", "railway_management");
  if($conn->connect_error){

    die("connection failed:". $conn-> connect_error);

  }
  $sql="SELECT ticket_id ,price ,seat_class_type ,ticket_remain FROM ticket ";
  $result = $conn->query($sql);

  if($result->num_rows>0){
    while($row=$result-> fetch_assoc()){
      echo "<tr><td>". $row["ticket_id"] ."</td><td>".$row["price"] ."</td><td>".$row["seat_class_type"] ."</td><td>".$row["ticket_remain"] ."</td>";

    }
    echo "</table>";
  } else{
    echo "0 result";
  }
  $conn->close();
   ?>


  </table>
  </header>
  </body>
  </html>
