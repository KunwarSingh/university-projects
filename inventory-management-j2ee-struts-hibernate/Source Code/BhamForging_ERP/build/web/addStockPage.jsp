<%-- 
    Document   : addStockPage
    Created on : 17 Sep, 2014, 2:53:00 AM
    Author     : Kunwar
--%>


<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@taglib prefix="s" uri="/struts-tags" %>
<%@taglib prefix="ajax" uri="/struts-dojo-tags" %>


<!DOCTYPE html>
<html>
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script language="JavaScript">
                 function fill(){
                  document.stockForm.action = "fillSupplierDetails";
                  document.getElementById('msg').innerHTML=document.stockForm.action.value;
                                    document.stockForm.submit();
                                    
                 }
                  function fillItemDetails(){
                     document.stockForm.action = "fillItemDetails";
                     document.getElementById('msg').innerHTML=document.stockForm.action.value;
                                    document.stockForm.submit();
                 }
                   function fill2(){
                     document.stockForm.action = "addStockInfo";
                     
                                    document.stockForm.submit();
                 }
              


 


                 </script>
            
       <ajax:head />
    </head>
    <body>
        <h1>Add New Stock</h1>
        
        <s:form id="form1" name="stockForm" action="">
            <s:hidden id="chngd"/>
            <ajax:autocompleter  name="name" size="1"  list="itemNamesList" showDownArrow="true" label="Name" ></ajax:autocompleter>            
            
            <ajax:a onclick="fillItemDetails();" label="Fill Item Details" loadingText="Please Wait"> Fill Item Details</ajax:a> 
            <ajax:submit onclick="fillItemDetails();"  value="Get Item Details" ></ajax:submit>
               <s:textfield  name="itemId" label="ItemId"></s:textfield>
                <s:textfield name="companyName" label="Company Name"></s:textfield>
                
                <s:radio name="type" label="Type" list="{'Forged Material','Tool Holder','Tool','Oil'}" requiredLabel="true"></s:radio>
                <s:textfield name="description" label="Description"></s:textfield>
                <s:textfield name="quantity" label="Quantity"></s:textfield>
                <s:textfield name="costPerPiece" label="Cost Per Item"></s:textfield>
                <ajax:datetimepicker name="date"  label="Date"></ajax:datetimepicker>
                
                
                <hr>
              
             <%--   <s:select    onchange="fill();" 
                 name="supplierName" value="supplierName" list="{'Kunwar','B','C','a'}"  />
                  <s:select    onchange="javascript:document.forms[0].fillSupplierDetails;" 
                 name="supplierName" value="supplierName" list="{'Kunwar','B','C'}"  />

                ${pageContext.request.contextPath}/trueAction 
               
                --%>

               <ajax:autocompleter   name="supplierName" size="1"  list="supplierNamesList" showDownArrow="false" label="Supplier Name" ></ajax:autocompleter> 
                <ajax:a onclick="fill();" >Fill Supplier Details </ajax:a>
                 <ajax:submit onclick="fill();"  value="Get Supplier Details" ></ajax:submit>
               <ajax:autocompleter name="supplierId" size="1"  list="stateslist" showDownArrow="false" label="Supplier Id" ></ajax:autocompleter> 
                
               <s:textfield name="street1" label="Street 1"></s:textfield>
               <s:textfield name="street2" label="Street 2"></s:textfield>
               <s:textfield name="city" label="City"></s:textfield>
               <s:textfield name="province" label="Province"></s:textfield>
               <s:textfield name="pincode" label="Pincode"></s:textfield>
               <s:textfield name="emailId" label="Email Id"></s:textfield>
               <s:textfield name="contactNo1" label="Primary Contact No."></s:textfield>
               <s:textfield name="contactNo2" label="Alternate Contact No."></s:textfield>
                
               <s:submit action="addStockInfo" onclick="fill2();"></s:submit>
               
             
              
               

                
               RESULT IS ${result}


            </s:form>
               
        
    </body>
</html>
