<%-- 
    Document   : stockMenu
    Created on : 17 Sep, 2014, 2:30:39 AM
    Author     : Kunwar
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@taglib prefix="s" uri="/struts-tags" %>
<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
            .menu_bar{
                background-color: #e2e0e0;
                
                
            }
             .menuList{
                  width:150px;
                 
            }
            .menuList a:link,a:active,a:visited{
                text-decoration:none;
                color:#0b0b0b;
                font-size: 18px;
               
            }
             .menuList a:hover{
                text-decoration:none;
                color:#0b0b0b;
                font-size: 20px;
               
            }
            
        </style>
    </head>
    <body>
        <div class="menu_bar">
            <ul id="menu_bar_p">
                <li class="menuList" ><s:a action="addStock">Add New Stock</s:a></li>
                <li class="menuList"><s:a action="viewStock">View Current Stock</s:a></li>
                <li class="menuList"><s:a action="updateStock">Update Stock</s:a></li>
                <li class="menuList"><s:a action="deleteStock">Delete Stock</s:a></li> 
                <li class="menuList"><s:a action="">Item Order History</s:a></li> 
                
            </ul>
        </div>
    </body>
</html>
