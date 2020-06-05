<%-- 
    Document   : addOrderPage
    Created on : 31 Oct, 2014, 6:47:39 PM
    Author     : Kunwar
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@taglib prefix="s" uri="/struts-tags" %>
<%@taglib prefix="ajax" uri="/struts-dojo-tags" %>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <script type="text/javascript" src="jquery.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>
            function fillCompanyDetails(){
                  document.orderForm.action = "fillCompanyDetails";         
                                    document.orderForm.submit();
                                    
                 }
                  function fill2(){
                     document.orderForm.action = "addOrderInfo";
                                    document.orderForm.submit();
                 }
                 
                 function addProduct(){
                     var x= document.getElementById("me");
                     x.style.visibility="visible";
                     
                 }
                 var count=1;
                 $(function() {

$(document).ready(function() {
    
 $("#add").click(function(){
  if(count===1){
      $("#me2").slideDown("slow");
  }
  if(count===2){
      $("#me3").slideDown("slow");
  }
  if(count===3){
      $("#me4").slideDown("slow");
  }
  if(count===4){
      $("#me5").slideDown("slow");
  }
  count++;
  if(count===6){
      count=5;
  }
  
  
});
});

$(document).ready(function() {
    
 $("#remove").click(function(){
  if(count===2){
      $("#me2").slideUp("slow");
      document.getElementById("name2").value="";
  }
  if(count===3){
      $("#me3").slideUp("slow");
      document.getElementById("name3").value="";
  }
  if(count===4){
      $("#me4").slideUp("slow");
      document.getElementById("name4").value="";
  }
  if(count===5){
      $("#me5").slideUp("slow");
      document.getElementById("name5").value="";
      
  }
  count--;
   if(count===0){
      count=1;
  }
  
  
  
});
});
});
           </script>
        <ajax:head />
    </head>
    <body>
        <h1>Add New Order</h1>
        <pre>
        <s:form id="form1" name="orderForm" action="" theme="simple">
          Contact Name                    <s:textfield  name="contactPerson" label="Contact Person"></s:textfield><br>
          Order Description               <s:textarea  name="orderDescription" label="Order Description"></s:textarea><br>
        </pre>
            <table >
                <tr >
                    <td width="10" >No.</td><td >Product Name</td><td>Quantity</td><td>Rate Per Piece</td><td>Delivery Date</td>
                </tr>
                <tr >
                    <td width="10">1</td>
                    <td><s:textfield  name="Name"></s:textfield></td>
                    <td><s:textfield  name="Quantity"></s:textfield></td>
                    <td><s:textfield  name="rateFixed"></s:textfield></td>
                    <td><s:textfield  name="deliveryDate"></s:textfield></td>
                </tr>
                 <tr id="me2" style="display: none;">
                    <td>2</td>
                    <td ><s:textfield id="name2" name="Name2"></s:textfield></td>
                    <td><s:textfield  name="Quantity2"></s:textfield></td>
                    <td><s:textfield  name="rateFixed2"></s:textfield></td>
                    <td><s:textfield  name="deliveryDate2"></s:textfield></td>
                </tr>
                  <tr id="me3" style="display: none;">
                    <td>3</td>
                    <td ><s:textfield id="name3" name="Name3"></s:textfield></td>
                    <td><s:textfield  name="Quantity3"></s:textfield></td>
                    <td><s:textfield  name="rateFixed3"></s:textfield></td>
                    <td><s:textfield  name="deliveryDate3"></s:textfield></td>
                </tr>
                  <tr id="me4" style="display: none;">
                    <td>4</td>
                    <td ><s:textfield id="name4" name="Name4"></s:textfield></td>
                    <td><s:textfield  name="Quantity4"></s:textfield></td>
                    <td><s:textfield  name="rateFixed4"></s:textfield></td>
                    <td><s:textfield  name="deliveryDate4"></s:textfield></td>
                </tr>
                  <tr id="me5" style="display: none;">
                    <td>5</td>
                    <td ><s:textfield id="name5" name="Name5"></s:textfield></td>
                    <td><s:textfield  name="Quantity5"></s:textfield></td>
                    <td><s:textfield  name="rateFixed5"></s:textfield></td>
                    <td><s:textfield  name="deliveryDate5"></s:textfield></td>
                </tr>
                
                <tr>
                    <td > <ajax:submit id="add"  value="Add" ></ajax:submit></td>
                    <td> <ajax:submit id="remove"  value="Remove" ></ajax:submit></td>
                    <td colspan="3"></td>
                </tr>
                <tr > <td> Company Name </td><td colspan="3"><s:textfield   name="companyName" size="2"  list="companyNamesList"   ></s:textfield></td>
                <td><s:submit  onclick="fillCompanyDetails();"></s:submit></td>
                </tr>
               
               
            </table>
                 
                  
                <pre>
                    
                
                 
                                    
          Company Head                   <s:textfield name="companyHead" label="Company Head" placeholder="Company Head Name"></s:textfield>  
         
          Address                        <s:textfield name="street1" label="Street 1" placeholder="Street Address 1"></s:textfield>
                                         <s:textfield name="street2" label="Street 2" placeholder="Street Address 2"></s:textfield>
                                         <s:textfield name="city" label="City" placeholder="Enter City" ></s:textfield>
                                         <s:textfield name="province" label="Province" placeholder="Enter Province"></s:textfield>
                                         <s:textfield name="pincode" label="Pincode" placeholder="Enter Pincode"></s:textfield> <br>
          Contact Info                   <s:textfield name="emailId" label="Email Id" placeholder="youremail@domain.com"></s:textfield>
                                         <s:textfield name="contactNo1" label="Primary Contact No." placeholder="Primary Contact No."></s:textfield>
                                         <s:textfield name="contactNo2" label="Alternate Contact No." placeholder="Alternate Contact No."></s:textfield><br>
            <s:submit  onclick="fill2();"></s:submit>
     
               
            
        </s:form></pre>
    </body>
</html>
