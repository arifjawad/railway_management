<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Flights</title>
      <link rel="stylesheet" type="text/css" href="style_flights.css">



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



<h2> schedule:</h2>

<table>
  <tr>
    <th>TRAIN NO</th>
    <th>DEPARTURE FROM</th>
    <th>DEPARTURE TO</th>
    <th>DEPARTURE TIME</th>
    <th>DEPARTURE DATE</th>
    <th>PRICE</th>


  </tr>


<?php


$conn= mysqli_connect("localhost", "root","", "railway_management");
if($conn->connect_error){

  die("connection failed:". $conn-> connect_error);

}
$sql="SELECT railway_id ,dep_from ,dep_to ,departure_time ,date ,price FROM flights,ticket where ticket_id=101 ";
$result = $conn->query($sql);

if($result->num_rows>0){
  while($row=$result-> fetch_assoc()){
    echo "<tr><td>". $row["railway_id"] ."</td><td>".$row["dep_from"] ."</td><td>".$row["dep_to"] ."</td><td>".$row["departure_time"] ."</td><td>".$row["date"] ."</td><td>".$row["price"] ."</td><td>";
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
