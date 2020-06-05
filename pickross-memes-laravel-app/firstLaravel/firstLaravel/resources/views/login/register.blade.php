@extends('welcome')

@section('contentReg')
<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic' rel='stylesheet' type='text/css'>
<style>
    #loginBtn{
    font-family: 'Noto Sans', sans-serif; 
    font-size:20px; 
    border:#19887e; 
    background: #19887e;}
    #loginBtn:hover {
		text-decoration: none;
		background: #ffcc00;
	}
        .loginBox{
            width:100%;
            
        }
        #link{
            font-family: 'Noto Sans', sans-serif; 
            font-size:15px; 
            text-decoration: none;
            color:#19887e;
        }
       
        
		
</style>

<div class="loginBox container">
           
 <form class=''>
     
     <div class="row">
       
    <div class="col-xs-12 col-lg-3">
            <div style="text-align:center; color:#ffffff; font-family: 'Noto Sans', sans-serif;font-size:20px;  background-color: #19887e; height:40px; padding-left: -20px;  ">Account Signup</div>
       </div>
 </div>
     <br>
   
    <div class="row">
        <div class="col-xs-12 col-lg-3">
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                <input type="text" class="form-control" id="username" placeholder="Username">
            </div>
        </div>
 </div>
     <br>
     <div class="row">
        <div class="col-xs-12 col-lg-3">
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                <input type="text" class="form-control" id="emailId" placeholder="Email Id">
            </div>
        </div>
 </div><br>
   <div class="row">
        <div class="col-xs-12 col-lg-3">
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                <input type="text" class="form-control" id="password" placeholder="Password">
            </div>
        </div>
 </div><br>
      <div class="row">
        <div class="col-xs-12 col-lg-3">
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                <input type="text" class="form-control"  placeholder="Confirm Password">
            </div>
        </div>
 </div><br>
 
  <div class="row" id="link">
        <div class="col-xs-12 col-lg-3">
           <label><input  type="checkbox"> I Agree to </label><a id="link" href="" >Terms and Conditions</a>
    </div>
           
 </div>
     
     <div class="row">
        <div class="col-xs-12 col-lg-3">
    <button type="submit" id='loginBtn' class="btn btn-primary" style="width:100%;">Sign Up</button>
    </div>
 </div>
      
 </div>
 </form> </div>
@stop





