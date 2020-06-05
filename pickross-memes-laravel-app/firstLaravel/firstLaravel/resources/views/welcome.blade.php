<!DOCTYPE html>   <!-- archive not used in current version -->
<html lang="en">
<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="View funny pics, photos. Vote on interesting polls.  Browse trending memes. Create your own memes, polls and share with friends. Checkout PickCross now!">
    <meta name="keywords" content="funny images,Funny photos,Comedy jokes,jokes,indian funny pictures,indian meme,sorry shaktiman">
    <meta name="author" content="pickcross.com">
	<link rel="shortcut icon" href="{{ asset('/images/favicon.ico') }}"/>
    <title>Pickcross - See funny pics, vote on interesting polls</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                	<img src="{{ asset('/images/logo.png') }}" alt="" >
                    
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                     <li>
                        <a href="#">#trending</a>
                    </li>
                    <li>
                        <a href="#">#fresh</a>
                    </li>
					                    <li>
                        <a href="#">Polls</a>
                    </li>
					                    <li>
                        <a href="#">Memes</a>
                    </li>
					                    <li>
                        <a href="#">Faceoffs</a>
						</li>
				<li class ="li-nb"><a href="#">IIN</a></li>
				<li class ="li-nb"><a href="#">Shaktimaan</a></li>

					<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <b class="caret"></b></a>
                <ul class="dropdown-menu">
				<li class ="li-dd"><a href="#">IIN</a></li>
				<li class ="li-dd"><a href="#">Shaktimaan</a></li>
                    <li><a href="#">Mogambo</a></li>
                    <li><a href="#">Gabbar</a></li>
                    <li><a href="#">Alia Bhatt</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Create your own</a></li>
                    <li class="divider"></li>                    
                </ul>
            </li>
              
</ul>	


				<ul class="nav navbar-nav navbar-right">
<li><form id ="navsearch" class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form></li>

					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}"> Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
							<li><a href="#"></span>My Profile</a></li>
							<li><a href="#"></span>Create</a></li>
							@if (Auth::user()->usertype ="0")
								<li><a href="#"></span>Admin Functions</a></li>
							@endif
								<li><a href="{{ url('/auth/logout') }}"></span>Logout</a></li>
							</ul>
						</li>
					
					<li><a href="#"> Contact Us</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="container-fluid second-heading">
    	<div class="container">
	
        	<div class="col-md-6 heading">
            	View funny pictures. Vote on interesting polls.
        	</div>
			<div class="col-md-6 heading">
			<div class="fb-like" data-href="http://www.facebook.com/pickcross" data-width="300px" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
			</div>
        </div>
    </div>
	
<div class="container">
	<div class="row">
	    <!-- Blog Entries Column -->
        <div class="col-md-8">
			@yield('content')
        </div>
        <!-- Blog Sidebar Widgets Column -->
        <!-- sidebar -->
		<div class="col-md-4">
	<aside>
    	<div class="well">
        	<div class="fb-like-box" data-href="https://www.facebook.com/pickcross" data-width="310" data-height="371" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
        </div>
		<div class="well">
		<form id ="navsearch1" class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        	<h4>Most Popular</h4>
            <div class="row">
            	@yield ('sidebar')
			</div>
		</div>
	</aside>  
</div>
<div class="col-md-4">
	<aside></aside>
</div>
	</div>
    <!-- /.row -->
	<hr>
	<!-- Footer -->
    <?php if(isset($footer)) echo $footer; ?>
</div>
	
	<footer>
	<div class="row">
    	<div class="col-lg-12">
        	<p>Copyright &copy; PickCross.Com <?php echo date('Y');?></p>
        </div>
        <!-- /.col-lg-12 -->
	</div>
    <!-- /.row -->
</footer>


	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
