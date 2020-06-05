

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
   
  
  
<style>
    #loginBtn{
    font-family: 'drakolomb', sans-serif; 
    font-size:20px; 
    border:#19887e; 
    background: #19887e;}
    #loginBtn:hover {
		text-decoration: none;
		background: #ffcc00;
	}
        #login2:hover {
             background: #ffcc00;
            
        } #register:hover{
            background: #ffcc00;
        }
        .loginBox{
            
            border:1px solid #19887e;
            background-color: #FFFfff;
            width:341.5px;
            margin-right:15px;
            
        }
        #link{
            font-family: 'drakolomb', sans-serif; 
            font-size:12px; 
            text-decoration: none;
            color:#19887e;
        }
        .image{
            margin-right:25px;
            margin-left:25px;
            
        }
        .line{
             font-family: 'drakolomb', sans-serif; 
             font-size:12px;
             color:#cccccc;
            
        }
        
		
</style>

<div id="box" class="loginBox container-fluid" style="display:none; position:absolute; right:-15px; top:56px;" >
     
    <div style="width:110%; background-color: #19887e; margin-left:-16px;  ">
            <div style="text-align:center; color:#ffffff; font-family: 'drakolomb', sans-serif;font-size:20px;  background-color: #19887e; height:40px; padding-top:5px; ">Account Login</div>
       </div>
       
                                        @if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
 <form method="POST" action="{{ url('/auth/login') }}" style="background-color: #ffffff;">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <br>
       <div class="row" >
        <div class="line col-xs-12 col-sm-9 col-md-6 col-lg-12">
            <span style="padding-left:3px; padding-right: 12.5px; "> Connect with a Social Network</span> </div>
       </div><br>
     
     <div class="row">
      
         
         <div class="col-xs-12 col-sm-9 col-md-6 col-lg-12">
             
             <img class="image" src="images/facebook-r.png" height="50px"></img>
             <img class="image" src="images/twitter-r.png" height="50px"></img>
             <img class="image" src="images/google-r.png" height="50px"></img>               
         </div>
     </div>
       <br>
      <div class="row" style="text-align:center;">
          <hr  width="100%">
      
      <div style="position:relative;  left:155px; top:-35px; background-color: #ffcc00; color:#ffffff; border: solid 1px;border-radius: 50%; border:#ffcc00; width:30px; height:30px; font-size: 20px;"> or </div>
      </div>
      <div class="row" >
        <div class="line col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top:-10px;">
          Log In with you Email
        </div>
           
 </div><br>
     
    <div class="row">
        <div class="col-xs-12  col-sm-9 col-md-6 col-lg-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user" style="color:#19887e;"></span></span>
                <input type="text" class="form-control" id="nickname" name="nickname" placeholder="Username" value="{{ old('nickname') }}">
            </div>
        </div>
 </div>
     <br>
   <div class="row">
        <div class="col-xs-12 col-sm-9 col-md-6 col-lg-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock" style="color:#19887e;"></span></span>
                <input type="text" class="form-control" id="password" placeholder="Password">
            </div>
        </div>
 </div>
      <div class="row">
        <div class="col-xs-4 col-sm-3 col-md-2 col-lg-6">
    <div class="checkbox" id="link">
        <label><input  type="checkbox">Remember me</label>
    </div>
        </div>
           
      <div class="col-xs-8 col-sm-6 col-md-4 col-lg-6" style="text-align: left; padding-top:10px;">
          <a id="link" href="{{ url('/password/email') }}" ><u>ForgotPassword?</u></a>
    </div>
      
      </div>
     <div class="row">
      
        <div class="col-xs-12 col-sm-9 col-md-6 col-lg-12">
    <button type="submit" id='loginBtn' class="btn btn-primary" style="width:100%;">Sign In</button>
    </div>
 </div>
     <br>
       <div class="row">
        <div class="line col-xs-6 col-sm-5 col-md-4 col-lg-12" style="font-size: 15px;">
            Dont have an Account Yet ?  <button type="button" id="register" style="color:#ffffff; background-color:#19887e; border: 1px solid #19887e; border-radius:4px;"> Register Here</button>
    </div>
           
 </div>
   
 </form> </div>


//register


<div id="registerBox" class="loginBox container-fluid" style="display:none; position:absolute; right:-15px; top:56px; ">
     
    
       
    <div class="col-xs-12 col-lg-12" style="width:110%; background-color: #19887e; margin-left:-16px;  ">
            <div style="text-align:center; color:#ffffff; font-family: 'drakolomb', sans-serif;font-size:20px;  background-color: #19887e; height:40px; padding-left: -20px; padding-top:5px; ">Account Signup</div>
    </div><br><br>
                                        @if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
    
 <form class='' method="POST" action="{{ url('/auth/register') }}" style="background-color: #ffffff;">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
     <br>
   
    <div class="row">
        <div class="col-xs-12 col-lg-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user" style="color:#19887e;"></span></span>
                <input type="text" class="form-control" id="nickname" placeholder="Username" name="nickname" value="{{ old('nickname') }}">
            </div>
        </div>
 </div>
     <br>
     <div class="row">
        <div class="col-xs-12 col-lg-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope" style="color:#19887e;"></span></span>
                <input type="text" class="form-control" id="email" placeholder="Email Id" name="email" value="{{ old('email') }}">
            </div>
        </div>
 </div><br>
   <div class="row">
        <div class="col-xs-12 col-lg-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock" style="color:#19887e;"></span></span>
                <input type="text" class="form-control" id="password" placeholder="Password">
            </div>
        </div>
 </div><br>
      <div class="row">
        <div class="col-xs-12 col-lg-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock" style="color:#19887e;"></span></span>
                <input type="text" class="form-control"  placeholder="Confirm Password">
            </div>
        </div>
 </div><br>
 
  <div class="row" id="link">
        <div class="col-xs-12 col-lg-12">
           <label><input  type="checkbox"> I Agree to the </label><a id="link" href="" > Terms and Conditions.</a>
    </div>
           
 </div>
     
     <div class="row">
        <div class="col-xs-12 col-lg-12">
    <button type="submit" id='loginBtn' class="btn btn-primary" style="width:100%;">Sign Up</button>
    </div>
 </div>
 <br>
 <div class="row">
        <div  class="line col-xs-12 col-lg-12" style="font-size:15px;">
    Already have an Account Account or Connect via Social Network <button type="button" id="login2" style="color:#ffffff; background-color:#19887e; border: 1px solid #19887e; border-radius:4px;"> Login Here</button>
    </div>
 </div>
 
      
 </div>
 </form> </div>



 