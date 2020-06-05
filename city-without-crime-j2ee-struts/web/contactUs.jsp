<%-- 
    Document   : contactUs
    Created on : 14 Jul, 2014, 2:36:38 PM
    Author     : Legend
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>

<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="jquery.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="header.css">
<link rel="stylesheet" type="text/css" href="nav_bar.css">
<link rel="stylesheet" type="text/css" href="criminal_home.css">
<link rel="stylesheet" type="text/css" href="superslides.css">
<link rel="stylesheet" type="text/css" href="userpane.css">
<link rel="stylesheet" type="text/css" href="psAdminHome.css">


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

    
    
     
    <%@include file="header.jsp" %>
     
           <%@include file="userpanel.jsp" %>
       <%@include file="logoutbar.jsp" %>
       
        <div class="userComplaint" style="background-color: #ffffff">
            <centre>
            <form action="report" method="POST" >
                
                      
<pre>
              






              Name               :<input type="text" name="name" value="" style="width:250px; height:30px;" required autofocus/> </br> 
              Father's Name      :<input type="text" name="fathersName" value="" style="width:250px; height:30px;" required autofocus/> <br>
              Mobile No.         :<input type="text" name="mobile" value="" style="width:250px; height:30px;"  required autofocus/> <br> 
              Email              :<input type="email" name="email" value="" style="width:250px; height:30px;" required autofocus/> <br>
              Address            :<textarea type="text" name="address" value="" style="width:250px; height:60px;" required autofocus> </textarea><br>
              City               :<input type="text" name="city" value="${param.city}" style="width:250px; height:30px;"required autofocus/><br>
              Pincode            :<input type="text" name="pincode" value="" style="width:250px; height:30px;"required autofocus/>  <br>
                                  <%! String [] areatype = {"Tilak Nagar Branch","Rajiv Chowk","Karol Bagh","Airport Metro","Janak Puri","Kashmiri Gate ISBT","Rajouri Metro","Dwarka Mor","Old Railway Station"}; %>                    
              Area Of Crime      :<select  name="areaOfCrime"  maxlength="60" style="width:257px; height:40px;"required autofocus >
                                  <option value="">Select Area</option>
                                  <% int i=1; for(String m : areatype){ %>

                                  <option value="<%=m%>"><%=m%></option> <% } %>   
                                  </select>  <br>    
                                 <%! String [] cat = {"Abuse","Assault","Burglary","Cyber Crime","Drunk","Embezzlement","False Imprisonment","Homicide","Kidnapping","Rape","Robbery"}; %>
              Category           :<select  id="" class="" name="category"  maxlength="60" style="width:257px; height:40px;"required autofocus>
                                  <option value="" style="size:50px;" >Select Category</option>
                                  <% for(String m : cat){ %>
                                  <option value="<%=m%>"><%=m%></option> <% } %>
                                  </select><br>
                                 <%! String [] pri = {"Low","Normal","High"}; %>
              Priority           :<select  id="" class="" name="priority"  maxlength="60" style="width:257px; height:40px;"required autofocus>
                                  <option value="" style="size:50px;" >Select Category</option>
                                  <% for(String m : pri){ %>
                                  <option value="<%=m%>"><%=m%></option> <% } %>
                                  </select><br>
              Description        :<textarea type="text" name="description" value="" style="width:250px; height:30px;"required autofocus> </textarea><br>
                                  <%! String [] ver = {"Adhar Card","Pan Card","Passport"}; %>
              Verification Type  :<select  id="" class="" name="vrificationType"  maxlength="60" style="width:257px; height:40px;"required autofocus>
                                  <option value="" style="size:50px;" >Select Verification Type</option>
                                  <% for(String m : ver){ %>
                                  <option value="<%=m%>"><%=m%></option> <% } %>
                                  </select><br>
              Verification Id    :<input type="text" name="verificationId" value="" style="width:250px; height:30px;" required autofocus/><br>
                                  <input type="submit" value="Submit Report" style="width:100px; height:30px;"required autofocus/>
              ${param.status}
                  
                       
                </pre>
                </form>
                   </centre>  
            
        </div>
       
    </body>
</html>
