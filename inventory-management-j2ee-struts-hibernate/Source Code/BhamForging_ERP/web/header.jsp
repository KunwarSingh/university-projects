<%-- 
    Document   : header
    Created on : 17 Sep, 2014, 12:54:44 AM
    Author     : Kunwar
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@taglib prefix="s" uri="/struts-tags" %>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       
        <script type="text/javascript" src="magicline.js"></script>
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="jquery.animate-enhanced.min"></script>
        <script type="text/javascript" src="jquery.easing.1.3"></script>
        <title> a</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <style>
            .mainHead{
                background-color: #141414;
                margin-left: -15px;
                margin-top: -15px;
                
            }
            .headLogo{
                
            }
            
            
            .head1{
                padding-left: 200px;
                padding-top: 20px;
                background-color: #141414;
                height: 60px;
                 font-style:normal;
  font-variant: full-width;
  font-weight: 600;
  font-size: 30pt;
  line-height: normal;
  font-family:sans-serif;
  color:white;
  
                    
                    
                
            }
            
            .nav_bar{
                background-color: #141414;
                height: 30px;
                font-size: 18px;
                padding-left: 200px;
                
            }
            .itemMenu{
                display:inline;
                 
                 
            }
            .itemList{
                display:inline;
                 float:left;
                 
                  width:100px;
                 
            }
            .itemList a:link,a:active,a:visited{
                text-decoration:none;
                color:#d5d5d5;
               
            }
             .itemList a:hover{
                text-decoration:none;
                color:white;
                font-size: 20px;
               
            }
            
        </style>
    </head>
    <body>
       
        <div class="head1">
            Bham Forging Works</div>
        <div class="nav_bar">
            <ul class="itemMenu" id="menu_bar">
                <li class="itemList" ><s:a action="home" style="text-decoration:none;color:#d5d5d5;">HOME</s:a></li>
                <li class="itemList"><s:a action="stock" style="text-decoration:none;color:#d5d5d5;">STOCK</s:a></li>
                <li class="itemList"><s:a action="orders" style="text-decoration:none;color:#d5d5d5;">ORDER</s:a></li>
                <li class="itemList"><s:a action="payments" style="text-decoration:none;color:#d5d5d5;">PAYMENT</s:a></li>  
                
            </ul>
        </div>
        
    </body>
</html>
