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
      
    </head>
    <body>
        <div  class="userpanel"  style=" position:absolute; top:197px; left:1070px; padding-left:70px; height:40px; width:240px;">
<a  id="login" style="width:40px;" href = "javascript:void(0)" onclick = "createlightbox();">Login</a>  <a style="width:40px;" href = "javascript:void(0)" onclick = "createlightbox1();">Register</a>
</div>
<!-- lightbox login -->
<div id="light" class="white_content" style=""> 
      
  <form  action="auth" method="POST">
    <pre>  <a href = "javascript:void(0)" onclick = "closelightbox();" style="float:right" >
<img id="close" src="http://2.bp.blogspot.com/-aXHXnOQPBJM/Tx_p1qqNI4I/AAAAAAAAAeU/bH0tlsikADQ/s1600/icon_cancel.gif" alt="" /></a>
	   <p style="text-align:center;font-size:20px;"><b>Login </b></p>
User Name:<input type="text" name="username" placeholder="enter user id" />
	   <br>
Password :<input type="password" name="password" placeholder="enter password" />
	   <br>
<% if(request.getAttribute("status")!=null)
    out.println(request.getAttribute("status")); %>
	   <input id="loginBtn1" type="submit" value="Log In" />
	
	</pre>
  
  </form>
           </div>

 <div id="fade" class="black_overlay"></div>

 
 <div id="light1" class="white_content1" style="display:block;" > 
<a href = "javascript:void(0)" onclick = "closelightbox1()" style="float:right">
<img src="http://2.bp.blogspot.com/-aXHXnOQPBJM/Tx_p1qqNI4I/AAAAAAAAAeU/bH0tlsikADQ/s1600/icon_cancel.gif" alt="" /></a>      
  <form action="signup" method="post">
    <pre>
	   <p style="text-align:center;font-size:20px;"><b>REGISTERATION FORM</b></p>
 Name :<input type="text" name="name" placeholder="enter user id" />
	   <br>
	   <!-- ALL FIELDS OF REGISTERATION WILL COME HERE -->
 ENTER PASSWORD:<input type="password" name="password" placeholder="enter password" />
	   <br>
USERNAME:<input type="text" name="username"/><br>
 ADDRESS :<input type="text" name="address"/><br>
 AREA TYPE: <input type="text" name="areaType"/><br>
 FAX: <input type="text" name="fax"/><br>
 MOBILE: <input type="text" name="mobile"/><br> 
OTHER: <input type="text" name="other"/><br>
PHEAD: <input type="text" name="phead"/><br>
PHONE: <input type="text" name="phone"/><br>






	   <input type="submit" value="Register" />
	
	</pre>
  
  </form>
           </div>

 <div id="fade" class="black_overlay"></div>
    </body>
</html>
