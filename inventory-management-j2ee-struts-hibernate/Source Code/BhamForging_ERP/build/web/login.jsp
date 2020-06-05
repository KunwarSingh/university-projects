<%-- 
    Document   : login
    Created on : 14 Aug, 2014, 5:40:35 PM
    Author     : Kunwar
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@taglib prefix="s" uri="/struts-tags" %>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login</title>
    </head>
    <body>
        <%@include file="header.jsp" %>
    
        <div style="text-align: center;">
        <h1>Authorized Login</h1>
        <s:form action="login" method="GET" theme="simple">
          Username      <s:textfield label="Username" name="username" ></s:textfield><br><br>
          Password      <s:password label="Password" name="password"></s:password><br><br>
            <s:submit></s:submit>
        </s:form>
        </div>
        <%@include file="footer.jsp" %>
    </body>
</html>
