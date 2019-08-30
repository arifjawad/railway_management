<html>
<head>
     <title>Ticket Booking Form</title>
     <link rel="stylesheet" href="purchase_ticket.css">



</head>


<body>
  <div class="logo">

    <ul class="main-nav">
      <li class="active"><a href="dash_board.php">  Dash Board    </a> </li>

      <li class="active"><a href="train_route.php">  Train Route  </a> </li>

      <li class="active"><a href="purchase_ticket.php"> Purchase Ticket </a> </li>
      <li class="active"><a href="Purchase_history.php"> Purchase History </a> </li>
      <li class="active"><a href="user_profile.html">  User Profile  </a> </li>





    </ul>

  </div>
  <div class="hero">
    <h1 class="heading"> BANGLADESH<br>RAILWAY </h1>


</div>
	<div>
	<h1>Ticket Booking Form</h1></div>

	<div class="loginbox">
		<form action="form_insert.php" method="POST" >





		<div>
       <label>Passenger Name:</label><br>
       <input type="text" name="name" class="form-control" placeholder="Name">
		 </div>

			 <div>
				 <label>Passenger Email Address:</label><br>
         <input type="text" name="email" class="form-control" placeholder="Email address">
      </div>

			<div>
				 <label>Passport No.:</label><br>
				 <input type="text" name="passportno" class="form-control" placeholder="passport no">
			 </div>
			 <div>
					<label>Country:</label><br>
					<input type="text" name="country" class="form-control" placeholder="country">
				</div>



		<div>

       <label>Departure From:</label><br><br>
       <select name = "depfrom">
         <option value="Dhaka"> Dhaka railway station </option>
       </select>
		 </div>

<div>
       <br><label>Departure To:</label><br><br>

      <select name = "depto">
       <option value="Rajshahi">Rajshahi</option>
       <option value="Khulna">Khulna</option>
       <option value="Sylhet">Sylhet</option>
       <option value="Chittagong">Chittagong </option>
       <option value="Jessore">Jessore</option>

     </select>
	 </div>

<div>

         <br><label>Departing Date:</label>

         <input type="date" name="date" class="form-control select-date">

</div>

<div >
           <label>No of seats</label>
          <input type="number" name="seat" class="form-control" value="1">
</div>
<div>
          <label>Travel Class:</label>

            <select name="class" class="custom-select">
              <option value="economy class">economy class</option>
              <option value="business class">business class</option>
            </select>

</div>

<div>
        <center> <button onclick="window.location.href = 'index.html';">  <input type="submit" name="submit" value="Submit" ></button>  </center>

	</div>

  <div>
  <a href="index.html"> HOME</a>
</div>

</form>
</body>
</html>
