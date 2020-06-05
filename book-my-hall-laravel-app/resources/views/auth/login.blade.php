
<div class="container loginForm">
 	<div class="row loginTitle">
 	Account Login<span class=" glyphicon glyphicon-remove lCloseBtn"></span>
 	</div>
	<br>
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
 	 <div class="row loginFormText" >
          Connect via Social Account
       </div>
	   
     
     <div class="row" style="text-align: center; padding-left: 20px; padding-right:20px; margin-top:10px;">
      
         
         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding:5px;">
            
             <div class="row" style=" border-radius:4px;  background-color: #3C5B9B; width:100%; margin:0; ">
              <div class="col-lg-2 col-xs-2 col-sm-2 col-md-2 " style="padding-left:3px;"><img class="image" src="{{url('assets/facebook.png')}}" height="40px;" ></img></div>
             <div class="col-lg-10 col-xs-10 col-sm-10 col-md-10" style="color:white; height:100%; padding-top:8px; padding-bottom:8px; padding-left: 0;padding-right: 0; font-size: 18px; font-weight: bolder; vertical-align: middle; text-align: center; margin-left:-10px;">Facebook</div>                
             </div> 
              <a href="{{url('login/facebook')}}" style="position:absolute;   width:100%; height:100%; left:0; top:0; cursor:pointer;"> </a>
           
         </div>
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding:5px;" >
               <div class="row" style=" background-color: #F63D27; border-radius:4px; width:100%; margin:0; ">
                 <div class="col-lg-2 col-xs-2 col-sm-2 col-md-2" style="padding-left:3px;"><img class="image" src="{{url('assets/google.png')}}" height="40px;" ></img></div>
             <div class="col-lg-10 col-xs-10 col-sm-10 col-md-10" style="color:white; height:100%;font-size: 18px; padding-top:8px; padding-bottom:8px; padding-left: 0;padding-right: 0; font-weight: bolder; vertical-align: middle; text-align: center; margin-left:-10px;">Google</div>                
            </div>
              <a href="{{url('login/google')}}" style="position:absolute; width:100%; height:100%;  left:0; top:0; cursor:pointer;"></a>  
            
            </div>
     </div>
       <br>
      <div class="row" style="text-align:center; margin-bottom:-10px;">
          <hr  width="100%">
      
      <div style="position:relative;  left:50%; top:-35px; background-color: #ffcc00; color:#ffffff; border: solid 1px;border-radius: 50%; border:#ffcc00; width:30px; height:30px; font-size: 20px; margin-left:-15px;"> or </div>
      </div>
 	<div class=" row loginFormText">Login with your email address</div>
 	<br>
 	
    <form  role="form" method="POST" action="{{ url('/auth/login') }}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12" >
    	<div class="input-group">
    	<span class="input-group-addon"><span class="glyphicon glyphicon-envelope" style="color:#cb202d;"></span></span>
    	<input type="email" class="form-control" name="email" id="lEmail" placeholder="Enter Email">
        </div>
    </div>
    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12" >
        <div class="input-group">
    	<span class="input-group-addon"><span class="glyphicon glyphicon-lock" style="color:#cb202d;"></span></span>
    	<input type="password" class="form-control" name="password" id="lPwd" placeholder="Enter Password">
        </div>
    </div>
    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
    	<input type="checkbox" value="">Remember Me</label>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:left">
	<a id="link" href="{{ url('/password/email') }}" ><u>ForgotPassword?</u></a>
   
    </div>
    
   
    <div  class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">

	    <button type="submit" class="btn btn-default  logInBtn">Log In</button>
	</div> 
	</form>
	<br><br>
	<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 regHere">
         <span class="logTxt">Dont have an Account </span>
	    <button type="button" id="regBtn" class="btn btn-default">Sign Up Now</button>
	</div>
	<br><br>
</div>
