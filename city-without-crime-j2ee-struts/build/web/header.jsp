<%-- 
    Document   : header
    Created on : 12 Jul, 2014, 8:43:58 PM
    Author     : Legend
--%>


<%@page import="DAO.DBService"%>
<%@page import="java.sql.ResultSet"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script>
            $(function() {
   $(document).ready(function() {
    
 $("#loginBtn").click(function(){
  $("#u").show();
});
});

   });

            
            </script>
    </head>
    <body>
        <div class="mainhead"  > <!-- Main head -->
<div class="header1" > <b>                         CWC      </b>
</div>

<div class="header2" > 

<div class="search">
<form class="search" method="post" action="contactUs.jsp">
  
    <%! String [] city = {"New Delhi","Chandigarh","Mumbai","Kolkata","Ludhiana","Chennai","Noida","Gurgaon"}; %>
    <select  id="search1" class="inputtext" name="city"   style="width:280px; height:50px;">
        <option value="" style="size:50px;" >Select City</option>
                                <% for(String m : city){ %>
                                <option ><%=m%></option> <% } %>
                              
    </select>
            <%! String [] area = {"Central Park","Karol Bagh","Airport Metro","Janak Puri West","Tihar Village","Kashmiri Gate ISBT","Rajouri Metro","Tilak Nagar","Old Railway Station"}; %>                    
     <select id="search" class="inputtext" name="area"   style="width:280px; height:50px;">
        <option value="">Select Area</option>
       
                                <% for(String m : area){ %>
                                <option><%=m%></option> <% } %>
                                
    </select>                            
    <input type="submit" value="Report" name="search" class="search_button"/><br /><br />
  </form>
</div></div>

</div> <!-- header dic end -->

<!-- navigation bar -->
<div class="nav_wrap">
<ul  id="menu_bar"  >
<li class="menu_item"><a href="index.jsp">Home</a></li>
<li class="menu_item"><a  href="AboutUS.jsp">About Us</a></li>
<li class="menu_item"><a    href="contactUs.jsp">Contact Us</a></li>
<li class="menu_item"><a  href="PhoneDirectory.jsp">Phone Directory</a></li>
</ul>
</div> 
<div id="panel2" ><!--
<div id="u" style="background-color: #302226;  margin-left:-15px; width:290px; height:40px; float:left;">
    <div  id="u1" class="userpanel" style="display:none; padding-left:30px; width:280px; "  > <a   href="#">Userpanel</a> </div>
<div id="u2" style="display:none; width:200px;">
<ul id="userbar">
<li style="width:150px; text-align:left;"><a href="psAdminHome.jsp">User Home</a></li>
<li style="width:150px; text-align:left;"><a href="inbox.jsp">Inbox</a></li>
<li style="width:150px; text-align:left;"><a href="criminalDBHome.jsp">Criminal Database</a></li>
<li style="width:150px; text-align:left;"><a href="accSettings.jsp">Account Settings</a></li>
</ul></div>

</div>-->

    
<div style="float:left; height:40px;  position:relative;  width:100%; background-color:#ffffff;"><marquee> 
    
                                             <%--     <%  String query=("Select  description from News order by description DESC");
                                                  ResultSet rs1=DBService.getData(query);    
                                                  while(  rs1.next()){ %>
                                                  <%=rs1.getString("description")%> 
                                                  <%}%>  --%>
                                             
    </marquee>
</div>
   

</div>






    </body>
</html>
