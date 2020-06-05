<%-- 
    Document   : orederMenu
    Created on : 17 Sep, 2014, 2:30:56 AM
    Author     : Kunwar
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@taglib prefix="s" uri="/struts-tags" %>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <link rel="stylesheet" type="text/css" href="menu.css">
         <style>
          
            
        </style>
    </head>
    <body>
        <div class="menu_bar">
            <ul id="menu_bar_p">     
                <li class="menuList" ><a  href="addOrder.action">Add New Order</a></li>
                <li class="menuList" ><s:a cssClass="menuList" action="viewOrder">View Order</s:a></li>
                <li class="menuList"><s:a cssClass="menuList" action="updateOrder">Update Order Progress</s:a></li>
                <li class="menuList"><s:a cssClass="menuList" action="viewOrderProgressHistory">Order Progress History</s:a></li>
                <li class="menuList"><s:a cssClass="menuList" action="cancelOrder">Cancel Order</s:a></li>  
                
            </ul>
        </div>
    </body>
</html>
