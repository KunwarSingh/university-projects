<%-- 
    Document   : psAdminHome
    Created on : 12 Jul, 2014, 2:59:48 AM
    Author     : Legend
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="header.css">
<link rel="stylesheet" type="text/css" href="nav_bar.css">
<link rel="stylesheet" type="text/css" href="criminal_home.css">
<link rel="stylesheet" type="text/css" href="superslides.css">
<link rel="stylesheet" type="text/css" href="userpane.css">
<link rel="stylesheet" type="text/css" href="psAdminHome.css">

<script type="text/javascript" src="jquery.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="city_state.js"></script>
<script type="text/javascript" src="userpane.js"></script>
<script type="text/javascript" src="magicline.js"></script>
<script type="text/javascript" src="criminal_home.js"></script>
<script src="jquery.easing.1.3.js"></script>
  <script src="jquery.animate-enhanced.min.js"></script>
  <script src="jquery.superslides.js" type="text/javascript" charset="utf-8"></script>

    </head>
    <body  style="background-color:#302226; ">

    
    
  <% if(session.getAttribute("username")==null){ %>
       <jsp:forward page="index.jsp" />
          <% } %>
    <%@include file="header.jsp" %>
     
           <%@include file="userpanel.jsp" %>
       <%@include file="logoutbar.jsp" %>
           <div class="adminParent">
     <%@include file="news.jsp" %>
            <div class="postNews" id="postn" style="top:285px; left:383px; background-color:grey;">
       <div id="em1" style="background-color:#FFFFFF; width:377px; height:40px;" >
              <b><a  href="#">Post News</a></b>	
       </div>
                <div>
                    <textarea name="description" style="width:370px; height:200px; " ></textarea>
                    <input type="file" name="image"  style="width:180px; height:30px; background-color: #ffff00"/>
                    <input type="submit" value="Post" style="width:80px; height:30px; background-color: #ffff00" /> 
                    
                </div>
		
           </div>
           
       </div>
    <h1> POLICE ADMIN </h1>
    <jsp:useBean id="ps" class="Entity.Police_Station" scope="session" />
    <h2>
        <pre>
        Name   : <jsp:getProperty name="ps" property="name" />
        Mobile : <jsp:getProperty name="ps" property="mobile" />
        
        </pre>
    </h2>
    
    </body>
    </body>
</html>
