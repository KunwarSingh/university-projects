<%-- 
    Document   : index
    Created on : 12 Jul, 2014, 8:42:32 PM
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
<link rel="stylesheet" type="text/css" href="lightbox.css">
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="home.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="city_state.js"></script>
<script type="text/javascript" src="userpane.js"></script>
<script type="text/javascript" src="magicline.js"></script>
<script type="text/javascript" src="criminal_home.js"></script>
<script src="jquery.easing.1.3.js"></script>
  <script src="jquery.animate-enhanced.min.js"></script>
  <script src="jquery.superslides.js" type="text/javascript" charset="utf-8"></script>

    </head>
   <body   style="background-color:#302226; ">

    
    
    
    <%@include file="header.jsp" %>
    <% if(session.getAttribute("username")==null){ %>
       <%@include file="loginbar.jsp" %>
          <% } %>
           <% if(session.getAttribute("username")!=null){ %>
           <%@include file="userpanel.jsp" %>
       <%@include file="logoutbar.jsp" %>
          <% } %>
          <div class="mainHome" > <%@include file="news.jsp" %>
              <!--
          <div class="popular" id="pop1" style="background-color:grey; position:absolute;top:285px; left:370px;">
       <div id="mwc" style="background-color:#FFFFFF; width:397px; height:40px;" >
              <b><a  href="#"> Most Wanted Criminals</a>      +</b>	
       </div>
	  
  
  <div class="wide-container" id="mwc1">
    <div id="slides">
      <ul class="slides-container">
        <li>
          <img src="most_wanted/syed_salahuddin_s.png"  width="300"  alt="Surly">
        </li>
        <li>
          <img src="most_wanted/sajid_mir.png"  width="700"  alt="Cinelli1">
        </li>
        <li>
          <img src="most_wanted/maulana_masood.png"  width="400"  alt="Affinity">
        </li>
        <li>
          <img src="most_wanted/zaki_ur_rehman.png"   width="400"  alt="Cinelli">
        </li>
       
      </ul>

      <nav class="slides-navigation">
        <a href="#" class="next">Next</a>
        <a href="#" class="prev">Previous</a>
      </nav>
    </div>
          </div>  </div>  -->

          </div>
         
     



    </body>
</html>

