<%-- 
    Document   : inbox
    Created on : 16 Jul, 2014, 11:57:59 AM
    Author     : Legend
--%>

<!DOCTYPE HTML>

<%@ page import="java.io.*,java.util.*,java.sql.*"%>
<%@ page import="javax.servlet.http.*,javax.servlet.*" %>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/sql" prefix="sql"%>
<%@page import="org.apache.catalina.connector.Request"%>
 
<html>
    <script type="text/javascript" src="jquery.js"></script>
<head>  <link rel="stylesheet" type="text/css" href="header.css">
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

<script src="script.js"></script>

<%
String q ="select * from user_complaint";
ResultSet rs = DAO.DBService.getData(q);
int c=0;
while(rs.next())
       {
    c=c+1;
}

rs.beforeFirst();
%>

<script>
 
 <% for(int k=1;k<=c;k++)
         {
%>       
$(document).ready(function(){
  $("#<%=k%>").click(function(){
    $("#<%= (k*15)+2 %>").slideToggle("slow");
  
    
    
    
  });
});


<% 

}

%>
</script>

<title>INBOX!!!!</title>
<style>
#inbox
{
border:1px solid #669999;
width:1350px;
height:600px;
}

#main
{
position:relative;
border: 1px solid #669999;
top:1px;
width:1330px; 
height:30px;
left:12px;

opacity:0.6;


}
<% for(int j=1;j<=c;j++)
{
%>
[id="<%= (15*j)+2 %>"]
{

border:solid 1px #c3c3c3;
text-align:center;
width:1330px;
display:none;
position:relative;
top:9px;
left:15px;


}
[id="<%= j %>"]
{
border:1px solid #669999;

width:1330px;

height:25px;
top:10px;
left:15px;
position:relative;


}

<%

}
%>
</style>

</head>

<body>
      <%@include file="header.jsp" %>
    <% if(session.getAttribute("username")==null){ %>
       <%@include file="loginbar.jsp" %>
          <% } %>
           <% if(session.getAttribute("username")!=null){ %>
           <%@include file="userpanel.jsp" %>
       <%@include file="logoutbar.jsp" %>
          <% } %>

<div id="inbox" >

<b><p style="text-align:center;font-size:20px;"> INBOX</p></b>
<div id="main">

<a href="" style="text-decoration:none;float:left;font-size:20px;" ><b> << </b></a>

<a href="" style="text-decoration:none;float:right;font-size:20px;" ><b> >> </b></a>

<marquee style="position:relative;left:30px; top:-1px;width:1100px;"><p style="position:relative;left:30px; top:-14px;"> Displaying Messages <p></marquee>
</div>


   
 
<% 

rs.next();
for(int i=1;i<=c;i++)
{
%>
<div id="<%=i%>">
 
    <span style="position:absolute;left:20px;"><%= rs.getString("name") %></span >
<span style="position:absolute;left:160px;"> <%= rs.getString("category") %></span>
<span style="position:absolute;left:360px;"><%= rs.getString("priority") %></span>
<span style="position:absolute;left:570px;"> <%= rs.getString("datetime") %></span>

</div>
<div id="<%= (i*15)+2 %>"> 

<span style="text-align:center;">
<%= rs.getString("description") %>
<% rs.next();  %>
</span>
<br><br><br>

</div>
<%


}
%>


<select name="opt" style="position:absolute;top:580px;left:1270px;">
<option>Delete</option>

</select>

</div>




</body>
</html>