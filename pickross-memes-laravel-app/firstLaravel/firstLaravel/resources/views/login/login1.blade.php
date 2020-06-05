
@extends('welcome')

@section('content')

     <div id="light" class="" style="display:block; top:50px; left:946px; width:270px; height:270px;"> 

            <form  class="loginform" action="auth" method="POST">
                
   <p style="text-align:center;color:#ffffff; font:20px georgia,serif; background-color: #101010;  padding-left: -20px;">Sign In</p>
   <br>
   <input type="text" name="username" placeholder="username" style=" padding-left: 20px; border-top-left-radius:10px; width:200px;border-color:#101010; border-top-right-radius:10px; color:#ffffff; height:35px; font:15px georgia,serif; background-color: #101010; ">
	   <br>
<input type="password" name="password" placeholder="password" style="padding-left: 20px; border-bottom-left-radius:10px; width:200px; border-color:#101010; border-bottom-right-radius:10px; color:#ffffff; height:35px; font:15px georgia,serif; background-color: #101010; ">
	   <br>	   <br>

           
           <a style="font:#ffffff" href="" >Register</a>   <a href="" >ForgotPassword?</a>
           <br> <br> 
           <input class="login_button" type="submit" value="Sign In" /><br>
           <hr style="color: #fffff;">
	
	<p style="margin-left:30px; padding:5px; border-radius: 100%; width:20px; height:20px; background-color: #E00000; font:15px georgia,serif; color:#ffffff;">OR </p>
            
        <input class="login_button" style="font:15px georgia,serif; background-color: #3b5998; border: solid 1px #3b5998;" type="submit" value="Sign In with Facebook" /><br><br>
        <input class="login_button" style="font:15px georgia,serif; background-color: #4099FF;border: solid 1px #4099FF;" type="submit" value="Sign In with Twitter" /><br><br>
        <input class="login_button" style="font:15px georgia,serif;background-color: #dd4b39;border: solid 1px #dd4b39;" type="submit" value="Sign In with Google" /><br><br>
                </form>  
            
                
               
            
            </div>

@stop