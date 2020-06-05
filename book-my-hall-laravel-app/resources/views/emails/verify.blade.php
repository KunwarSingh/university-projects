<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>
			body
				{
					background-image: url('images/eiffel_bg.jpg');
					background-attachment: fixed;
					background-size: 100% 100%;
				}
				*
	{
		margin: 0px;
		padding: 0px;
	}
	
body
	{
		font-family: Candara, Calibri, Segoe, "Segoe UI", Optima, Arial, sans-serif;
		font-size: 18px;
		line-height: 18px;
		background-color: #e9eaed;
		color: #000;
		width: 100%;
	}
	
#container
	{
		width: 1200px;
		margin: 15px auto 0px auto;
	}

#navbar
	{
	width: 100%;
	background-color: #39b1a4;
	border-bottom: 1px solid #39b1a4;
	height: 40px;
	-webkit-box-shadow: 0 2px 2px 2px #888;
		-moz-box-shadow: 0 2px 2px 2px #888;
			box-shadow: 0 2px 2px 2px #888;
	}
	
#container
	{
		width: 1200px;
		margin: 15px auto 0px auto;
	}



	
#login-right
	{
		float: right;
		width: 35%;
	}

#login-right h2
	{
		color: #fff;
		text-shadow: 1px 1px 3px #000;
		line-height: 50px;
	}

#login-right button
	{
		font-family: Candara, Calibri, Segoe, "Segoe UI", Optima, Arial, sans-serif;
		font-size: 18px;
		line-height: 18px;
		-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
				border-radius: 5px;
		border: 1px solid #888;
		padding: 7px;
		background-color: #dc4d38;
		cursor: pointer;

	}

	
	
	
	
.login-margin
	{
		margin-top: 80px;
	}

	.btn-signin
	{
		width: 122px;
		font-size: 18px;
	}

.btn-signup
	{
		width: 212px;
		float: right;
		margin-right: 55px;
	}

.short-pass
	{
		width: 230px;
	}
#login-right input
	{
		
		font-family: Candara, Calibri, Segoe, "Segoe UI", Optima, Arial, sans-serif;
		font-size: 18px;
		line-height: 18px;
		-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
				border-radius: 5px;
		border: 1px solid #888;
		padding: 5px;
		margin-bottom: 3px;
		
	}
	

#login-right p	
	{
	color: #fff;
	text-shadow: 1px 1px 5px #000;
	text-indent: 12px;
	}
	
.login-margin
	{
		margin-top: 80px;
	}
.name
	{
	width: 170px;
	}
	
.long
	{
	width: 356px;
	}

.margin-radio
	{
		margin-top: 5px;
		margin-left: 80px;
	}
#login-left
	{
		float: left;
		width: 25%;
		height: 520px;
	}
	
	
#login-left p
		{
			color: #fff;
			text-shadow: 1px 1px 5px #000;
			font-size: 25px;
			line-height: 35px;
			text-align: center;
		}
		
#login-left h1
	{
		color: #fff;
		text-shadow: 1px 1px 3px #000;
		font-size: 40px;
		line-height: 50px;
		text-align: center;
		margin-top: 130px;
	}
	
#passwordsignup{
width:147px;
font-size:16px;
border-radius:5px;
padding:5px;
}
	
footer
	{	
		position: absolute;
		text-align: center;
		color: #fff;
		text-shadow: 1px 1px 3px #000;
		width: 1200px;
		margin-bottom:10px;
	}
	
.clear
	{
		clear: both;
	}

</style>
</head>

<body>

        <div id="container"><br>
		       @if($user_status=="active")
			    <div id="login-right">
				<div class="login-margin"></div>
				
				           <form  method="post" action="{{url('/members/login')}}" autocomplete="on"> 
						   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                 <h2>Sign In</h2> 
                                 <input class="long" name="email" type="text" placeholder="Email Id" required  autofocus >
                                 <input class="short-pass" name="password" type="password" placeholder="Password" required >       
                                 <button class="btn-signin" type="submit" name="login">Sign In</button>
                             
                            </form>
                            
				
				
				
				
				</div>
							
        		<div id="login-left">
				<h1>Welcome to Book My Party</h1>
					<br>
					<p>
					Your email id has been verified successfully kindly login
					</p>
			    </div>
				@else
				<div id="login-left">	
               <h1>Verification Failed</h1>
			   <form  method="post" action="{{url('/resend')}}" autocomplete="on"> 
			   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                 <h2>Sign In</h2> 
                                 <input class="long" name="email" type="text" placeholder="Email Id" required  autofocus >    
                                 <button class="btn-signin" type="submit">Resend Mail</button>
                             
                </form>
				</div>
          


@endif
				
			<div class="clear"></div>
			
             
				
                
							
         			<footer>All Rights Reserved bookmyparty.com | Copyright &copy; 2015</footer>

        </div>




</body>
</html>