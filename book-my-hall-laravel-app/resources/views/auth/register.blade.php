
<div class="container registerForm">
		<div class=" row registerTitle">
		Register<span class=" glyphicon glyphicon-remove regCloseBtn"></span>
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
		<br>
        <form class="" role="form" method="POST" action="{{ url('/auth/register') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group col-lg-12">
			<div class="input-group">
			<span class="input-group-addon"><span class="glyphicon glyphicon-user" style="color:#cb202d;"></span></span>
			<input type="text" class="form-control" id="name" placeholder="Full Name" name="name">
		    </div>
		</div>
		<div class="form-group col-lg-12">
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-user " style="color:#cb202d;"></span></span>
				<input type="text" class="form-control" id="username" placeholder="Username" name="username">
			</div>
		</div>
		<div class=" form-group col-lg-12">
			<div class="input-group">
			<span class="input-group-addon"><span class="glyphicon glyphicon-envelope " style="color:#cb202d;"></span></span>
			<input type="email" class="form-control" id="email" placeholder="Email Address" name="email">
			</div>
		</div>
		
		<div class="form-group col-lg-12">
			<div class="input-group">
			<span class="input-group-addon"><span class="glyphicon glyphicon-lock" style="color:#cb202d;"></span></span>
			<input type="password" class="form-control" id="passowrd" placeholder="Enter Password" name="password">
		    </div>
		</div>
		<div class="form-group col-lg-12">
			<div class="input-group">
			<span class="input-group-addon"><span class="glyphicon glyphicon-lock" style="color:#cb202d;"></span></span>
			<input type="password" class="form-control" id="password_confirmation" placeholder="Confirm Passowrd" name="password_confirmation">
			</div>
		</div>
		<div  class="form-group col-lg-12">

		    <button type="submit" class="btn btn-default  signUpBtn">Sign Up</button>
		 </div>   

		</form>
		<br>
	    <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 logHere">
         <span class="regTxt">Already have an Account </span>
	    <button type="button" id="logBtn" class="btn btn-default">Log In</button>
	    </div>
	</div>

