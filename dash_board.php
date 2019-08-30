<?php


$conn= mysqli_connect("localhost", "root","", "railway_management");
if($conn->connect_error){

  die("connection failed:". $conn-> connect_error);

}
$sql="SELECT passenger_name, passport_number,country FROM passenger ";
$result = $conn->query($sql);
$td1='';
$td2='';


if($result->num_rows>0){
  while($row=$result-> fetch_assoc()){
    $td1="<td>". $row["passenger_name"] ."</td>";
      $td2="<td>". $row["passport_number"] ."</td>";
        $td3="<td>". $row["country"] ."</td>";



  }

} else{
  echo "0 result";
}
$conn->close();


 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title> Bangladesh Railway </title>
     <link href="dash_board.css" rel="stylesheet" type="text/css">
   </head>

   <body>
   <header>



     <div class="logo">

       <ul class="main-nav">
         <li class="active"><a href="dash_board.php" >  Dash Board    </a> </li>

         <li class="active"><a href="train_route.php">  Train Route  </a> </li>
         <li class="active"><a href="Purchase_ticket.php"> Purchase Ticket </a> </li>

         <li class="active"><a href="Purchase_history.php"> Purchase History </a> </li>
         <li class="active"><a href="user_profile.html">  User Profile  </a> </li>





       </ul>

     </div>
     <div class="hero" >
       <h1  class="heading" > BANGLADESH<br>RAILWAY </h1>

 </div>





  <div >
  <h2> Personal Information : </h2>




  <table align="right" width="35%">


  <tr>
    <th>Name:</th>
    <?php echo $td1; ?>
      </tr>
      <tr>
    <th>Passport no:</th>
     <?php echo $td2; ?>
      </tr>
      <tr>
    <th>country:</th>
     <?php echo $td3; ?>
      </tr>



  </tr>
  </div>


 </table>
 </header>
 </body>
 </html>
