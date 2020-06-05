

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">



<div id="box" class="loginBox container-fluid " style="display:none; position:fixed; overflow-y: auto;  z-index: 3;" >
     
    <div id="SignUpSignInTitle" style="width:110%; background-color: #19887e; margin-left:-16px;  ">
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
                                        
 {!! Form::open(['method' => 'POST' , 'url' =>'/auth/login' , 'id'=>'loginForm' , 'style'=>'background-color: #ffffff;' ])  !!}                                       
 <!--<form id="loginForm" method="POST" action="{{ url('/auth/login') }}"  style="background-color: #ffffff;"> -->
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <br>
       <div class="row" >
        <div class="line col-xs-12 col-sm-9 col-md-6 col-lg-12">
            <span style="padding-left:3px; padding-right: 12.5px; "> Connect with a Social Network</span> </div>
       </div><br>
     
     <div class="row" style="text-align: center; padding-left: 20px; padding-right:20px;">
      
         
         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding:5px;">
            
             <div class="row" style=" border-radius:4px;  background-color: #3C5B9B; width:100%; margin:0; ">
              <div class="col-lg-2 col-xs-2 col-sm-2 col-md-2 " style="padding-left:3px;"><img class="image" src="{{url('images/facebook.png')}}" height="40px;" ></img></div>
             <div class="col-lg-10 col-xs-10 col-sm-10 col-md-10" style="color:white; height:100%; padding-top:10px; padding-bottom:10px; padding-left: 0;padding-right: 0; font-size: 15px; font-weight: bolder; vertical-align: middle; text-align: center;">Facebook</div>                
             </div> 
              <a href="{{url('login/facebook')}}" style="position:absolute;   width:100%; height:100%; left:0; top:0; cursor:pointer;"> </a>
           
         </div>
        
     <!--      <div class="col-xs-4 col-sm-3 col-md-2 col-lg-4">
             <a href="https://pickrossnew.com/login/googleplus"><img class="image" src="{{url('images/twitter-r.png')}}" height="50px"></img> </a>              
         </div> -->
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding:5px;" >
               <div class="row" style=" background-color: #F63D27; border-radius:4px; width:100%; margin:0; ">
                 <div class="col-lg-2 col-xs-2 col-sm-2 col-md-2" style="padding-left:3px;"><img class="image" src="{{url('images/google.png')}}" height="40px;" ></img></div>
             <div class="col-lg-10 col-xs-10 col-sm-10 col-md-10" style="color:white; height:100%;font-size: 15px; padding-top:10px; padding-bottom:10px; padding-left: 0;padding-right: 0; font-weight: bolder; vertical-align: middle; text-align: center;">Google</div>                
            </div>
              <a href="{{url('images/google')}}" style="position:absolute; width:100%; height:100%;  left:0; top:0; cursor:pointer;"></a>  
            
            </div>
     </div>
       <br>
      <div class="row" style="text-align:center;">
          <hr  width="100%">
      
      <div style="position:relative;  left:46%; top:-35px; background-color: #ffcc00; color:#ffffff; border: solid 1px;border-radius: 50%; border:#ffcc00; width:30px; height:30px; font-size: 20px;"> or </div>
      </div>
      <div class="row" >
        <div class="line col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top:-10px;">
          Log In with you Email
        </div>
           
 </div><br>
     
    <div class="row form-group">
        <div class="col-xs-12  col-sm-12 col-md-12 col-lg-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope" style="color:#19887e;"></span></span>    
                {!! Form::email('email',null,['class'=>'form-control','id'=>'emailLogin','placeholder'=>'Email Id','value'=>'old(email)']) !!}
            <!--    <input  type="email" class="form-control" id="emailLogin" name="email" placeholder="Email Id" value="{{ old('email') }}"> -->
            </div>
        </div>
 </div>
     
   <div class="row form-group">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock" style="color:#19887e;"></span></span>
                 {!! Form::password('password',['class'=>'form-control','id'=>'password','placeholder'=>'Password','required']) !!}
         
            <!--    <input required type="password" class="form-control" id="password" name="password" placeholder="Password"> -->
            </div>
        </div>
 </div>
      <div class="row form-group">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    <div class="checkbox" id="link">
        
            {!! Form::checkbox('remember') !!}
             {!! Form::label('remember','Remember Me') !!}
       <!-- <label><input  type="checkbox" name="remember">Remember me</label> -->
    </div>
        </div>
           
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="text-align: left; padding-top:10px;">
          <a id="link" href="{{ url('/password/email') }}" ><u>ForgotPassword?</u></a>
    </div>
      
      </div>
     <div class="row form-group">
      
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 {!! Form::submit('Sign In',['class'=>'btn btn-primary','id'=>'loginBtn','style'=>'width:100%']) !!}
   <!-- <button type="submit" id='loginBtn' class="btn btn-primary" style="width:100%;">Sign In</button> -->
    </div>
 </div>
     <br>
       <div class="row">
        <div class="line col-xs-12 col-sm-12 col-md-12 col-lg-12" style="font-size: 15px;">
            Dont have an Account Yet ? 
            {!! Form::button('Register Here',['id'=>'register','style'=>'color:#19887e; border: 1px solid #19887e; border-radius:4px;']) !!}
           <!-- <button type="button" id="register" style="color:#ffffff; background-color:#19887e; border: 1px solid #19887e; border-radius:4px;"> Register Here</button> -->
    </div>
           
 </div>
     <br>
     <br>
     
 {!! Form::close()  !!} </div>





<div id="registerBox" class="loginBox container-fluid" style="display:none; position:fixed; overflow-y: auto; z-index:3;">
     
    
       
    <div id="SignUpSignInTitle" class="col-xs-12 col-lg-12" style="width:110%; background-color: #19887e; margin-left:-16px;  ">
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
 {!! Form::open(['method' => 'POST' , 'url' =>'/auth/register' , 'id'=>'registerForm' , 'style'=>'background-color: #ffffff;' ])  !!}                                          
<!-- <form id="registerForm" class='' method="POST" action="{{ url('/auth/register') }}"  style="background-color: #ffffff;"> -->
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
     <br>
   
    <div class="row form-group">
        <div class="col-xs-12 col-lg-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user" style="color:#19887e;"></span></span>
             {!! Form::text('username',null,['class'=>'form-control','id'=>'username','placeholder'=>'Username','value'=>'old(username)','required']) !!}
            <!--    <input required   type="text" class="form-control" id="username" placeholder="Username" name="username" value="{{ old('username') }}" > -->
            </div>
        </div>
 </div>
     
   <!--  <input type="hidden" name="avatar" value="/images/defaultUser.jpg"> -->
     {{--*/ $img='/images/defaultUser.jpg';  /*--}}
    {!! Form::hidden('avatar',$img) !!}
          
     <div class="row form-group">
        <div class="col-xs-12 col-lg-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope" style="color:#19887e;"></span></span>
               {!! Form::email('email',null,['class'=>'form-control','id'=>'email','placeholder'=>'Email Id','value'=>'old(email)']) !!}
       
            <!--    <input required type="email" class="form-control" id="email" placeholder="Email Id" name="email" value="{{ old('email') }}"> -->
                
            </div>
        </div>
 </div>
     
   <div class="row form-group">
        <div class="col-xs-12 col-lg-12">
            <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-lock" style="color:#19887e;"></span></div>
                {!! Form::password('password',['class'=>'form-control','id'=>'password','placeholder'=>'Password','required']) !!}
              <!--  <input required type="password" class="form-control" id="password" name="password" placeholder="Password"/> -->
            </div>
        </div>
 </div>
    
      <div class="row form-group">
        <div class="col-xs-12 col-lg-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock" style="color:#19887e;"></span></span>
               {!! Form::password('password_confirmation',['class'=>'form-control','id'=>'confirmPassword','placeholder'=>'Confirm Password','required']) !!}
         
             <!--   <input required type="password" class="form-control" id="confirmPassword" name="password_confirmation" placeholder="Confirm Password" > -->
            </div>
        </div>
 </div>
     
 
  <div class="row form-group" id="link">
        <div class="col-xs-12 col-lg-12">
            {!! Form::checkbox('agree') !!}
            {!! Form::label('agree','I Agree to the') !!}
         <!--  <label><input  name="agree" type="checkbox"> I Agree to the </label> --><a id="link" href="" > Terms and Conditions.</a>
    </div>
           
 </div>
     
     <div class="row form-group">
        <div class="col-xs-12 col-lg-12">
      {!! Form::submit('Sign Up',['class'=>'btn btn-primary','id'=>'loginBtn','style'=>'width:100%']) !!}
   <!-- <button type="submit" id='loginBtn' class="btn btn-primary" style="width:100%;">Sign Up</button> -->
    </div>
 </div>
 <br>
 <div class="row form-group" >
        <div  class="line col-xs-12 col-lg-12" style="font-size:15px;">
    Already have an Account Account or Connect via Social Network 
    {!! Form::button('Login Here',['id'=>'login2','style'=>'color:#19887e; border: 1px solid #19887e; border-radius:4px;']) !!}
        
  <!--  <button type="button" id="login2" style="color:#ffffff; background-color:#19887e; border: 1px solid #19887e; border-radius:4px;"> Login Here</button> -->
    </div>
 </div>
 <br><br>
{!! Form::close()  !!}
 
      
 </div>
 



 