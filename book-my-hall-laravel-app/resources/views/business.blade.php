@extends('app')
@section('content')
<head>
 <style type="text/css">
  .advertiseVenue
  {
  	border: 1px solid black;
  	width: 500px;
  	margin-left: 60px;
    height: 450px;
   

  }

  .addPartyVenue
  {
  	border: 1px solid black;
  	width: 500px;
  	margin-left: 60px;
    height: 450px;
  }
  .advertiseVenueBtn
  {
  	background-color: #cb202d;
  	color: white;
  }
  .addPartyVenueBtn
  {
  	background-color: #cb202d;
  	color: white;
  }
  .containerform
  {
    height: 500px;
    /* border: 1px solid blue; */
  }

 
  </style>
</head>
<br><br>
<div class="container">
 	<div class="jumbotron">
 			<h1>Welcome</h1>
 			<h3>Book venues for parties,marriages,kitties..</h3>


 	</div>
 	</div>
 	<div class="container containerform">
  
 	<div class="row row1">
  
 	  <div class="col-lg-6 advertiseVenue">
 		
 		<strong><center>Advertise with us</center></strong>
 		<br>
 		<p><b>Book My Party Venue is the most cost effective
 			high impact market platform for party establishments</b><br>
 			If you would like to know how advertising with us helps,You can advertise with us your business.</p>
 			
 		<form role="form">
 		   <div class="form-group">
 		   <input type="text" class="form-control" id="city" placeholder=" Enter city">
 		   </div>
 		   <div class="form-group">
 		   <input type="text" class="form-control" id="city" placeholder=" Enter Your Business Venue">
 		   </div>
 		   <div class="form-group">
 		   <input type="text" class="form-control" id="city" placeholder=" Enter Your Name">
 		   </div>
 		   <div class="form-group">
 		   <input type="text" class="form-control" id="city" placeholder=" Enter Phone Number">
 		   </div>
 		   <div class="form-group">
 		 <center>  <button type="submit" class="btn btn-default advertiseVenueBtn">Call Me</button> </center>
 		   </div>

 		</form>
 		</div>
 		<div class="col-lg-6 addPartyVenue">
        <strong><center>Add Your Party Venue</center></strong>
        <br>
        <p><b>Add your restaurant and gain visibility among othrers</b><br>
        	All we need is a little information from you.</p>

        <form role="form" method="POST" action="{{ url('/addBusiness') }}" > 
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
        <input type="text" class="form-control" id="name" placeholder=" Enter Name" name="first_name">
        </div>
        <div class="form-group">
        <input type="text" class="form-control" id="email" placeholder=" Enter Email" name="email">
        </div>
        <div class="form-group">
        <input type="text" class="form-control" id="phoneNo" placeholder=" Enter Phone Number" name="contact">
        </div>
        <div class="form-group">
        <input type="text" class="form-control" id="city" placeholder=" Enter city" name="hall_city">
        </div>
        <div class="form-group">
        <input type="text" class="form-control" id="partyHall" placeholder=" Party Hall Name" name="hall_name">
        </div>
        <div class="form-group">
        <input type="text" class="form-control" id="partyHallLoctation" placeholder=" Party Hall Location" name="hall_address">
        </div>
        <div class="form-group">
 	    <center><button type="submit" class="btn btn-default addPartyVenueBtn">Submit Details</button></center>
 		</div>


        </form>
 		</div>
  
 	</div>
 	</div>
  <div class="container">
        <center><bold>In a Hurry?</bold></center>
        <center style="color:white; background-color:black;">contact us at party@bookMyVenue.com or call at BookMyPartyVenue</center>
        8608782325
        9797538134
  </div>

@stop