<%-- 
    Document   : news
    Created on : 16 Jul, 2014, 11:21:05 PM
    Author     : Legend
--%>

<%@page import="DAO.DBService"%>
<%@page import="java.sql.ResultSet"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <%--
        <%  String query2=("Select  imageFile,description from News");
                                                  ResultSet rs3=DBService.getData(query2);    
                                                  rs3.next(); %> --%>
                                                 
        <div class="latestnews" id="na" style="background-color:grey;">
       <div id="na1" style="background-color:#FFFFFF; width:760px; height:40px;" >
              <b><a  href="#"> Latest News </a></b>	
       </div>
	  
  
   <div  id="na2">
       <div id="latestImage" class="lImage" > <img src="news/ab.png" width="200" height="200"> </div>
       
   </div> <%--
       <%=rs3.getString("description")%>  --%>Description
       
		</div>
           
           
           <div class="emergency" id="emNews" style="top:285px; background-color:grey;">
       <div id="em1" style="background-color:#FFFFFF; width:377px; height:40px;" >
              <b><a  href="#">Emergency News</a></b>	
       </div>
               
              
               <div><marquee direction="up"><ul>
                                               <%--   <%  String query1=("Select  description from News");
                                                  ResultSet rs2=DBService.getData(query1);    
                                                  while(  rs2.next()){ %>
                                                  <li><%=rs2.getString("description")%> </li>
                                                  <%}%>
                                             </ul> --%></marquee></div>
		
           </div>
    </body>
</html>
