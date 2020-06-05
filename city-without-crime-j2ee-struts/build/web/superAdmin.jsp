

<head>
    
    <title>SuperAdmin</title>

<!-- to add criminal in database --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="jquery.js"></script>
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

<script> 
$(document).ready(function(){
  $("#flip1").click(function(){
    $("#panel1").slideToggle("slow");
  });
});

$(document).ready(function(){
  $("#flip22").click(function(){
    $("#panel22").slideToggle("slow");
  });
});


$(document).ready(function(){
  $("#flip3").click(function(){
    $("#panel3").slideToggle("slow");
  });
});

</script>

<style>
    
    #panel1,#panel22,#panel3{
        border:1px solid #6699FF;
        display:none;
        
       
        
    }
    #flip1,#flip22,#flip3{
        border:3px solid #6699FF;
        text-align:center;
        color:#ff00cc;
        height:30px;
        font-family: cursive;
        font-size:20px;
    }
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
    
    <h1 align="center">Super Admin</h1>
    
    
    <div id="flip1">
      ADD CRIMINAL  
    </div>
    <div id="panel1">
       
        <form action="superAd">
    <pre>
                         Criminal_Record                                                                                                    

     
      CRIME LEVEL  : <input type="text" name="crimelevel" /><br>
      FIRST NAME   : <input type="text" name="fname"  /><br>
      LAST NAME    : <input type="text" name="lastname" /><br>
      GENDER       : <input type="text" name="gender" /><br>
      HEIGHT       : <input type="text" name="height" /><br>
      IMAGE FILE   : <input type="text" name="imagefile" /><br>
      STATUS       : <input type="text" name="status" /><br>
      WEIGHT       : <input type="text" name="weight" /><br>
                    <%! String [] areatype = {"Tilak Nagar Branch","Rajiv Chowk","Karol Bagh","nishu","Airport Metro","Janak Puri","Kashmiri Gate ISBT","Rajouri Metro","Dwarka Mor","Old Railway Station"}; %>                    
              SELECT BRANCH      :<select  name="branch"   style="width:257px; height:40px;" >
                                  <option value="">Select Area</option>
                                  <% int i=1; for(String m : areatype){ %>

                                  <option value="<%=m%>"><%=m%></option> <% } %>   
                                  </select>  <br>    

                             Criminal_Activity


      CAID           : <input type="text" name="caid" /><br>
      ACTION TAKEN   : <input type="text" name="actiontaken" /><br>
      CRIME ACTIVITY : <input type="text" name="crimeactivity" /><br>
      DATE OF CRIME  : <input type="text" name="dateofcrime" /><br>
     
   
                         <input type="submit" value="ADD" />
         
     </pre>  
        </form>
        
        
        
    </div>
               
                                  
                                  <br><br><br>                   
                                  
   <div id="flip22" >
       DELETE CRIMINAL
     
   </div>
   
                                  
                                  
    <br>
    <div id="panel22">
        CRIMINAL ACTIVITY
        
        <form action="superDel">
           
            
<pre>

     Enter Criminal_activity id :<input type="text" name="cid_de" />
 
 <br>
       <input type="submit" value="delete" />


           
</pre>            
            
        </form>
   

   </div>
            
    
    <br><br><br>
    
    
    <div id="flip3">
        UPDATE CRIMINAL
    </div>
        
    
    <div id="panel3">
        <form action="superUp">
        
   <pre>     
                           UPDATE   CRIMINAL_RECORD

      OLD CRID         : <input type="text" name="caid_up" /><br>
      NEW CRIME LEVEL  : <input type="text" name="crimelevel_up" /><br>
      NEW FIRST NAME   : <input type="text" name="fname_up"  /><br>
      NEW LAST NAME    : <input type="text" name="lastname_up" /><br>
      NEW GENDER       : <input type="text" name="gender_up" /><br>
      NEW HEIGHT       : <input type="text" name="height_up" /><br>
      NEW IMAGE FILE   : <input type="text" name="imagefile_up" /><br>
      NEW STATUS       : <input type="text" name="status_up" /><br>
      NEW WEIGHT       : <input type="text" name="weight_up" /><br>
                    <%! String [] areatype1 = {"Tilak Nagar Branch","Rajiv Chowk","Karol Bagh","nishu","Airport Metro","Janak Puri","Kashmiri Gate ISBT","Rajouri Metro","Dwarka Mor","Old Railway Station"}; %>                    
              SELECT BRANCH      :<select  name="branch_up"   style="width:257px; height:40px;" >
                                  <option value="">Select Area</option>
                                  <% int j=1; for(String m : areatype1){ %>

                                  <option value="<%=m%>"><%=m%></option> <% } %>   
                                  </select>  <br>    



                        UPDATE  CRIMINAL_ACTIVITY


      OLD CAID           : <input type="text" name="crid_up" /><br>
      NEW ACTION TAKEN   : <input type="text" name="actiontaken_up" /><br>
      NEW CRIME ACTIVITY : <input type="text" name="crimeactivity_up" /><br>
      NEW DATE OF CRIME  : <input type="text" name="dateofcrime_up" /><br>
     
        
       <input type="submit" value="update" />
        
        
        </pre>  
        </form>  
    </div>
                                  
                                  
                                  
                                  
                                  
                                  
                                  
                                  
                                  
                                  
                   
    
</body>