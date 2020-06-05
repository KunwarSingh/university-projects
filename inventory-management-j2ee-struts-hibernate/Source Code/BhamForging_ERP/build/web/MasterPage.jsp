<%-- 
    Document   : MasterPage
    Created on : 9 Sep, 2014, 7:05:13 PM
    Author     : Kunwar
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@taglib prefix="t" uri="http://tiles.apache.org/tags-tiles" %>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>MasterPage</title>
        <style>
            #magic-line { position: absolute; top: 102px; left: 0; width: 100px; height:5px; background: #fe4902; }
        </style>
        <script type="text/javascript" src="magicline.js"></script>
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="jquery.animate-enhanced.min"></script>
        <script type="text/javascript" src="jquery.easing.1.3"></script>
    </head>
    <body>
        <table  style="margin: -15px -13px 0px -15px;">
            <tr>
                <td colspan="4" width="1366" >
                    <t:insertAttribute name="header" /> 
                </td>
            </tr>
           <tr>
                <td  width="200"  >
                     <t:insertAttribute  name="leftBar" />
                </td>
                <td  width="150" height="500" style="background-color: #e2e0e0;" >
                     <h2> <t:insertAttribute name="bodyMenu" /></h2>
                </td>
                <td  > 
                     <h2> <t:insertAttribute name="bodyContent" /></h2>
                </td>
                <td  width="200" >
                     <h2> <t:insertAttribute name="rightBar" /></h2>
                </td>
            </tr>
             <tr>
                  <td colspan="4" height="100">
                      <t:insertAttribute name="footer" />
                  </td>
            </tr> 
            
        </table>
    </body>
</html>
