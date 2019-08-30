

<html>
<head>
     <title>PURCHASE HISTORY</title>
     <link rel="stylesheet" href="index.css">



</head>


<body>
	<div>
	<h3>PURCHASE HISTORY</h3></div>



<header>
  <style>
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 80%;
  }

  td, th {

      color: black;
      font-family: 'Ubuntu';
      font-size: 15px;
      font-style: bold;
      font-weight: 100;
      text-transform: uppercase;


    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }

  tr {
    background-color:white;
  }
  </style>



<h2>Your Ticket is:</h2>

<table>
<tr>

<th>Passenger Name:</th>
  <th>DEPARTURE FROM:</th>
  <th>DEPARTURE TO:</th>
   <th>DEPARTURE DATE</th>
  <th>Seat Type:</th>


</tr>


<?php


$conn= mysqli_connect("localhost", "root","", "railway_management");
if($conn->connect_error){

die("connection failed:". $conn-> connect_error);

}
$sql="SELECT passenger_name,dep_from ,dep_to ,date,class FROM booking";
$result = $conn->query($sql);

if($result->num_rows>0){
while($row=$result-> fetch_assoc()){
  echo "</tr><td>".$row["passenger_name"] ."</td><td>".$row["dep_from"] ."</td><td>".$row["dep_to"] ."</td><td>".$row["date"] ."</td><td>".$row["class"] ."</td><td>";
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
