<%-- 
    Document   : viewStockPage
    Created on : 17 Sep, 2014, 2:53:16 AM
    Author     : Kunwar
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@taglib prefix="jstlCore" uri="http://java.sun.com/jsp/jstl/core" %>
<%@taglib prefix="s" uri="/struts-tags" %>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        
        <table>
            <tr ><td>
                    <s:a action="viewStockNext" label="Next" >Next</s:a></td>
            </tr>
            <tr>
                <td width="25%">Item Id</td>
                <td width="25%">  Name</td>  
                <td width="25%">Quantity  </td>          
                <td width="25%">Cost Per Piece</td>
            </tr>
           
            <jstlCore:forEach var="i" items="${requestScope.cs}">
                     <tr>
                    <td>${i.itemId}</td>
                    <td>${i.name}</td>
                    <td>${i.quantity}</td>
                    <td>${i.costPerPiece}</td>
                    </tr>
                </jstlCore:forEach>
            
            
                

</table>
       
    </body>
</html>
