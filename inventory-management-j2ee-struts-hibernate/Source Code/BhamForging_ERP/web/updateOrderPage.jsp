<%-- 
    Document   : updateOrderPage
    Created on : 31 Oct, 2014, 6:48:29 PM
    Author     : Kunwar
--%>


<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@taglib prefix="jstlCore" uri="http://java.sun.com/jsp/jstl/core" %>
<%@taglib prefix="jstlSQL" uri="http://java.sun.com/jsp/jstl/sql"%>
<%@taglib prefix="s" uri="/struts-tags" %>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <style>
            
            #od1,#od3,#od5{
                background-color: #d5d5d5;
                
            }
            
            #od2,#od4,#od6{}
            
            progress {  
    /* style rules */  
    background-color: #f3f3f3;  
    border: 0;  
    height: 18px;  
    border-radius: 9px; 

}  
progress::-webkit-progress-bar {  
    /* style rules */   background-color: #f3f3f3;  
    border: 0;  
    height: 18px;  
    border-radius: 9px; 

}  
progress::-webkit-progress-value {  
    /* style rules */   background-color: #f3f3f3;  
    border: 0;  
    height: 18px;  
    border-radius: 9px; 

}  
progress::-moz-progress-bar {  
    /* style rules */   background-color: #f3f3f3;  
    border: 0;  
    height: 18px;  
    border-radius: 9px; 

}  

            </style>
            <script src="js/jquery.js" type="text/javascript"></script> 
            <script>
                function update(){
                  document.processing1.action = "updateProgress";         
                                    document.processing1.submit();
                                    
                 }
                var o1=1;
                var o2=1;
                var o3=1;
                var o4=1;
                var p1=1;
                 $(function() {

$(document).ready(function() {
    
 $("#o1").click(function(){
  if(o1===1){
      $("#pd1").slideDown("slow");
      $("#pd2").slideDown("slow");
      $("#pd3").slideDown("slow");
      $("#pd4").slideDown("slow");
      $("#pd5").slideDown("slow");
      o1=0;
      document.getElementById("o1").innerHTML="-";
  }
  else{
      $("#pd1").slideUp("slow");
      $("#pd2").slideUp("slow");
      $("#pd3").slideUp("slow");
      $("#pd4").slideUp("slow");
      $("#pd5").slideUp("slow");
      o1=1;
      document.getElementById("o1").innerHTML="+";
  }
  
  
  
  
});
 $("#o2").click(function(){
  if(o2===1){
      $("#pd6").slideDown("slow");
      $("#pd7").slideDown("slow");
      $("#pd8").slideDown("slow");
      $("#pd9").slideDown("slow");
      $("#pd10").slideDown("slow");
      o2=0;
      document.getElementById("o2").innerHTML="-";
  }
  else{
      $("#pd6").slideUp("slow");
      $("#pd7").slideUp("slow");
      $("#pd8").slideUp("slow");
      $("#pd9").slideUp("slow");
      $("#pd10").slideUp("slow");
      o2=1;
      document.getElementById("o2").innerHTML="+";
  }
  
  
  
  
});
  $("#o3").click(function(){
  if(o3===1){
      $("#pd11").slideDown("slow");
      $("#pd12").slideDown("slow");
      $("#pd13").slideDown("slow");
      $("#pd14").slideDown("slow");
      $("#pd15").slideDown("slow");
      o3=0;
      document.getElementById("o3").innerHTML="-";
  }
  else{
      $("#pd11").slideUp("slow");
      $("#pd12").slideUp("slow");
      $("#pd13").slideUp("slow");
      $("#pd14").slideUp("slow");
      $("#pd15").slideUp("slow");
      o3=1;
      document.getElementById("o3").innerHTML="+";
  }
  
  
  
  
});

 $("#o4").click(function(){
  if(o4===1){
      $("#pd16").slideDown("slow");
      $("#pd17").slideDown("slow");
      $("#pd18").slideDown("slow");
      $("#pd19").slideDown("slow");
      $("#pd20").slideDown("slow");
      o4=0;
      document.getElementById("o4").innerHTML="-";
  }
  else{
      $("#pd16").slideUp("slow");
      $("#pd17").slideUp("slow");
      $("#pd18").slideUp("slow");
      $("#pd19").slideUp("slow");
      $("#pd20").slideUp("slow");
      o4=1;
      document.getElementById("o4").innerHTML="+";
  }
  
  
  
  
});
 

});
//Progress Bar
 var progressbar = $('#progressbar'),  
        max = progressbar.attr('max'),  
        time = (1000/max)*5,      
        value = progressbar.val();  
  
    var loading = function() {  
        value += 1;  
        addValue = progressbar.val(value);  
          
        $('.progress-value').html(value + '%');  
  
        if (value === max) {  
            clearInterval(animate);                      
        }  
    };  
  
    var animate = setInterval(function() {  
       loading();  
   }, time); 


});
function disp(me,x){
    if(x.style.display==="block"){
    x.style.display="none";
    document.getElementById(me).innerHTML="+";}
     else{
    x.style.display="block";
    document.getElementById(me).innerHTML="-";}

    
}


        
    
    

                </script>
    </head>
    <body>
        <div > <h1>Order Progress Details </h1></div>
        
        <jstlSQL:setDataSource driver="com.mysql.jdbc.Driver" url="jdbc:mysql://localhost:3306/bham_erp" user="root" password="" ></jstlSQL:setDataSource>
        <jstlSQL:query var="rs" sql="Select * from Order_Details where status='Pending'" />
       <% int od=1; %>
       <% int pd=1; %>
       <% int pp=0; %>
       <% int pdd=1; %>
       <% int td=1; %>
       <% int f=1; %>
        <jstlCore:forEach var="i"  items="${rs.rows}">
            <div id="od<%=od%>" ><div ><pre>Order Id  ${i.orderId}     ${i.contactPerson}  <progress value="60" max="100"></progress>
  ${i.progress}                                  <a id="o<%=od%>">+</a>  
  ${i.orderDescription}</pre></div> 
                <jstlSQL:query var="rs1" sql="Select * from Product_Details where order_details_FK_orderId='${i.orderId}'" />
            <jstlCore:forEach var="x" begin="1" end="5">
                <div  id="pd<%=pd%>" style="display:none;"><div>Stage ${x}  <progress value="60" max="100"></progress><a onclick="disp(p<%=pd%>,t<%=pd%>);" id="p<%=pd%>">+</a>   </div>
            <table id="t<%=td%>" style="display:none;">
                <tr>
                    <td></td><td width="200">Product Name</td><td>Quantity</td><td>Completed</td><td></td></tr>
                    
                        
                      
                    <jstlCore:forEach var="j"  items="${rs1.rows}">
                        <jstlSQL:query var="rs2" sql="Select * from  Product_Processing where product_details_FK_productId='${j.productId}'" />
                         
                        <tr>
                     <td></td>
                        <td>${j.name}</td>
                        <td>${j.Quantity}</td>
                        
                        <jstlCore:forEach var="p" begin="<%=pp%>" end="<%=pp%>" items="${rs2.rows}">
                            <td>${p.itemsProcessed}</td>
                            <td><form name="processing<%=f%>" action="updateProgress">
                                <input type="text" id="<%=pp%>" name="itemsProcessed" value=""/>  <input type="submit" onclick="" value="Update" /> 
                                <input type="text" id="ff" name="processingStageId" value="${p.processingStageId}" style="visibility:hidden;"/>
                                </form>
                                
                            </td><% f++; %></jstlCore:forEach>
                               
                        </tr>
                    </jstlCore:forEach>
                
               <% td++; %> 
            </table><% pd++; %><% pdd++; %><% pp++; 
                                             if(pp==5) 
                                                 pp=0;%>
        </div></jstlCore:forEach>
            </div> <% od++; %>
        </jstlCore:forEach>
     
       
       
       
    </body>
</html>
