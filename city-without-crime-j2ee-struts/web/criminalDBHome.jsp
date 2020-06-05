<%--
    Document   : criminalDBHome
    Created on : 12 Jul, 2014, 12:39:39 AM
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

<script type="text/javascript" src="jquery.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="city_state.js"></script>
<script type="text/javascript" src="userpane.js"></script>
<script type="text/javascript" src="magicline.js"></script>
<script type="text/javascript" src="criminal_home.js"></script>
<script src="jquery.easing.1.3.js"></script>
  <script src="jquery.animate-enhanced.min.js"></script>
  <script src="jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
  <script>
   var c=0;
    $(function() {
	  $('#slides').superslides({
      inherit_width_from: '.slides-container',
        inherit_height_from: '.slides-container'
     });
    });
    
   
  </script>
  


</head>

<body  style="background-color:#302226; ">
       <% if(session.getAttribute("username")==null){ %>
       <jsp:forward page="index.jsp" />
          <% } %>
    <%@include file="header.jsp" %>
     
           <%@include file="userpanel.jsp" %>
       <%@include file="logoutbar.jsp" %>
    
    
<div id="cat" class="category" style="background-color:grey; float:left; width:275px;">
       <div id="cat1" style="background-color:#FFFFFF; width:275px; height:40px;">
              <b> <a href="#">Categories</a></b>	
       </div>
	    <div  id="cat2" style="text-align:left;">
		       <ul  >
                           
                           <li  class="menu_item" value=""><a    href="#contact">Abuse</a></li>
			   <li class="menu_item"><a  href="#home">Assault</a></li>
			   <li class="menu_item"><a  href="#home">Burglary</a></li>
                           <li class="menu_item"><a   href="criminalSearch?Category=Cyber Crime"  > Cyber Crime</a></li>
<li class="menu_item" ><a  href="#home">Drunk Driving</a></li>
<li class="menu_item" ><a  href="#home">Embezzlement</a></li>
<li class="menu_item" ><a  href="#home">False Imprisonment</a></li>
<li class="menu_item" ><a  href="#home">Homicide</a></li>
<li class="menu_item" ><a  href="#home">Kidnapping</a></li>
<li  class="menu_item" ><a  href="#news">Rape</a></li>
<li class="menu_item" ><a  href="#home">Robbery</a></li>


</ul>
        </div>	

		
	  

	  

	  
	


</div>
		



<div class="criminalmain" style="position:absolute;left:265px; top:235px;  float:left;">

<div class="popular" id="pop1" style="background-color:grey;">
       <div id="mwc" style="background-color:#FFFFFF; width:397px; height:40px;" >
              <b><a  href="#"> Most Wanted Criminals</a>      +</b>	
       </div>
	  
  
   <div class="wide-container" id="mwc1">
    <div id="slides">
      <ul class="slides-container">
        <li>
          <img src="most_wanted/syed_salahuddin_2.png"  width="300"  alt="Surly">
        </li>
        <li>
          <img src="most_wanted/sajid_mir_2.png"  width="700"  alt="Cinelli1">
        </li>
        <li>
          <img src="most_wanted/maulana_masood_1.png"  width="400"  alt="Affinity">
        </li>
        <li>
          <img src="most_wanted/dawood_ibrahim.png"   width="400"  alt="Cinelli">
        </li>
       
      </ul>

      <nav class="slides-navigation">
        <a href="#" class="next">Next</a>
        <a href="#" class="prev">Previous</a>
      </nav>
    </div>
  </div> 
		</div>
		
		<div id="pop2" class="popular" style="background-color:grey; ">
       <div id="lp" style="background-color:#FFFFFF; width:397px; height:40px;">
              <b><a href="#"> Latest Popular </a>          +</b>	
       </div>
	<!--    <div id="slides1">
    <div class="slides-container">
      <img src="images/a.jpeg" alt="Cinelli">
      <img src="images/b.jpeg" width="450" alt="Surly">
      <img src="images/c.jpeg" width="450"  alt="Cinelli">
      <img src="images/d.jpeg" width="450"  alt="Affinity">
    </div>

    <nav class="slides-navigation">
      <a href="#" class="next">Next</a>
      <a href="#" class="prev">Previous</a>
    </nav>
  </div> -->
	  
  <!--
   <div id="lp1" class="wide-container">
    <div id="slides">
      <ul class="slides-container">
        <li>
          <img src="images/a.jpeg"  width="300px" height="300px" alt="Surly">
        </li>
        <li>
          <img src="images/b.jpeg"  width="300px" height="300px" alt="Cinelli1">
        </li>
        <li>
          <img src="most wanted/maulana masood.png"  width="400px" height="300px" alt="Affinity">
        </li>
        <li>
          <img src="most wanted/zaki ur rehman.png"   width="400px" height="300px" alt="Cinelli">
        </li>
       
      </ul>

      <nav class="slides-navigation">
        <a href="#" class="next">Next</a>
        <a href="#" class="prev">Previous</a>
      </nav>
    </div>
  </div> -->
		</div>
		        <div style="height:800px;">
				<div  class="userpanel" style="float:left; padding-left:30px; width:250px;  margin-left:0px; margin-right:-15px;"   > <a   id="advsearchbar" href="#">Advanced Search</a> 
		
		<form  class="panel1" id="advsearchform"  style="display:none; top:40px;"  name="advsearchform" action="donuts.php" method="POST">
        <div class="field">
         <input type="text" class="searchInputField" id="fname" placeholder="First Name" name="fName" value="" />
        </div>
		 <div class="field">
         <input type="text" class="searchInputField" id="lname" placeholder="Last Name" name="lName" value="" />
        </div>
        <div class="field">
         <select  class="searchInputField" style="width:270px; height:40px;"  id="age" name="Age"  >
		 <option value ="null">Age Range</option> 
		 <option value ="null">15-20</option> 
		 <option value ="null">20-25</option> 
		 <option value ="null">25-30</option> 
		 <option value ="null">30-35</option> 
		 <option value ="null">35-40</option> 
		 <option value ="null">40-45</option> 
		 <option value ="null">45-50</option> </select>
        </div>
       
		
        <div class="field">
<select class="searchInputField" style="width:270px; height:40px;" onchange="set_country(this,country,city_state);" size="1"  name="region">
<option value="" selected="selected">Select Region</option>

<script type="text/javascript">
setRegions(this);
</script>
</select></div>
        <div class="field">
<select class="searchInputField" style="width:270px; height:40px;" name="country" size="1" disabled="disabled"  onchange="set_city_state(this,city_state);"></select></div>
        <div class="field"><select class="searchInputField" style="width:270px; height:40px;" name="city_state" size="1" disabled="disabled"  onchange="print_city_state(country,this);"></select></div>


		
        <div class="field">
        <input type="text" placeholder="category" class="searchInputField" id="category" name="category" value="" />
        </div>
        <div class="field">
        <select  class="searchInputField" style="width:270px; height:40px;"  id="clevel" name="clevel"  >
		<option  value="null">--Select Crime Level--</option>
		<option value="null">1+</option>
		<option value="null">2+</option>
		<option value="null">3+</option>
		<option value="null">4+</option>
		<option value="null">5+</option>
		</select>
        </div>
       
        <div class="field">
        <input type="button" id="advbtn" class="advsearch_button" value="Search" onclick="advsearchform(this.form);" />
        </div>
      </form>
	  
	  </div>
	 </div>
		
		
		
			  <div class="searchArea" id="sa" style="background-color:grey;">
       <div id="sa1" style="background-color:#FFFFFF; width:800px; height:40px;" >
              <b><a  href="#"> Search Area</a>                 +</b>	
       </div>
	  
  
   
       <% for(int i=0;i<9;i++) { %>
       <div class="criminalImage"><div><img src="criminal/<%= request.getAttribute("imageFile"+i) %>" width="200" height="200">
         </div>
               Name         : <%= request.getAttribute("fname"+i) %>  <%= request.getAttribute("lname"+i) %>
               Crime Level  : <%= request.getAttribute("cLevel"+i) %>
                
                 
               </div>
           <% } %>
       
       
  
		</div>
		
		
           
		

		
		</div>
		
		

</body>
</html>
