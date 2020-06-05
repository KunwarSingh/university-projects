<%-- 
    Document   : loginbar
    Created on : 14 Jul, 2014, 12:41:52 AM
    Author     : Legend
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <link rel="stylesheet" type="text/css" href="lightbox.css">
      <script type="text/javascript" src="home.js"></script>
      <script type="text/javascript" src="jquery.js"></script>
    </head>
    </head>
    <body>
        <div    class="userpanel"  style=" position:absolute; top:197px; left:1070px; padding-left:70px; height:40px; width:240px;">
<a  id="login"  style="width:40px;" href = "#">Login</a>  <a id="register" style="width:40px;" href = "#">Register</a>
</div>
<!-- lightbox login -->
<div id="light" class="white_content" style="display:block; top:237px; left:946px; width:270px; height:270px;"> 
      
  <form  action="auth" method="POST">
    <pre><p style="text-align:center;font-size:20px;"><b>Sign In </b></p>
User Name:<input type="text" name="username" placeholder="enter user id" />
	   <br>
Password :<input type="password" name="password" placeholder="enter password" />
	   <br>
<% if(request.getAttribute("status")!=null)
    out.println(request.getAttribute("status")); %>
	   <input id="loginBtn1" type="submit" value="Sign In" />
	
	</pre>
  
  </form>
           </div>

 <div id="fade" class="black_overlay" style="position:absolute; top:235px; left:1048px; width:300px; height:308px;"></div>

 
 <div id="light1" class="white_content1" style="display: none; position:fixed; top:80px; left:300px; width:500px; height:750px;" > 
  <form action="signup" method="post">
    <pre> <a href = "" style="float:right" >
<img id="close" src="http://2.bp.blogspot.com/-aXHXnOQPBJM/Tx_p1qqNI4I/AAAAAAAAAeU/bH0tlsikADQ/s1600/icon_cancel.gif" alt="" />Close</a>

	   <p style="text-align:center;font-size:20px;"><b>REGISTERATION FORM</b></p>
        Name                  <input type="text" name="name" placeholder="enter user id" /><br>
        Police Station Head   <input type="text" name="phead"/><br>
        Username              <input type="text" name="username"/><br>
        Password              <input type="password" name="password" placeholder="enter password" /><br>
        Address               <input type="text" name="address"/><br>
        Area Type             <input type="text" name="areaType"/><br>
        Phone No.             <input type="text" name="phone"/><br>
        Fax No.               <input type="text" name="fax"/><br>
        Mobile                <input type="text" name="mobile"/><br> 
        Other                 <input type="text" name="other"/><br>
        <input type="submit" value="Register" />  ${param.status}
	
	</pre>
  
  </form>
           </div>

 <div id="fade1" class="black_overlay" style="position:absolute; top:0px; left:0px; width:100%; height:100%;"></div>
    </body>
</html>
