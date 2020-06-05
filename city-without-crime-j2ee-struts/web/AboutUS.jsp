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
<style>
    #aboutus
    {
        background-color:#ccccff;
        position:absolute;
        top:280px;
        left:280px;
        width:700px;
        padding:20px;
        margin:20px;
        font-size:15px;
    }
    
    
</style>
<%@include file="header.jsp" %>
    <% if(session.getAttribute("username")==null){ %>
       <%@include file="loginbar.jsp" %>
          <% } %>
           <% if(session.getAttribute("username")!=null){ %>
           <%@include file="userpanel.jsp" %>
       <%@include file="logoutbar.jsp" %>
          <% } %>
          <br><br><br>
<h1 style="position:absolute;top:220px;left:550px;">
    About Us
</h1>
<br>
<br>
 
<div id="aboutus" >  
   <pre>
<span style="text-color:black;padding:30px; margin:20px;">
  <b>
CWC aka City Without Crime is an initiative undertaken by Delhi Police 
to eradicate the problem of lodging FIR by going to the police station.

It was the dream of late COMMISIONER OF POLICE Miss. Vishakha Rai to 
open such an website so that citizens of delhi can easily locate 
the  police station nearest to their locality.


JAI HIND!!!! JAI DELHI!!!!STAY SAFE...STAY INFORMED!!!
   
    
    </b>
    </span>
    </pre>
</div>