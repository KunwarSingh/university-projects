<%-- 
    Document   : newjsp
    Created on : 5 Nov, 2014, 3:10:44 PM
    Author     : Kunwar
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
     <div > <h1>Order Progress Details </h1></div>
       
       <% int od=1; %>
       <% int pd=1; %>
       <% int pdd=1; %>
       <% int td=1; %>
       <jstlCore:set var="pp" value="requestScope.product_ProcessList.getItemsProcessed()" ></jstlCore:set>
        <jstlCore:forEach var="i"  items="${requestScope.orderList}">
            <div id="od<%=od%>" ><div >Order Id  ${i.orderId}     ${i.getContactPerson()} 
                                        <progress value="60" max="100"></progress>
                                            ${i.getProgress()}<a id="o<%=od%>">+</a>  <br>
                ${i.getOrderDescription()}</div>       
            <jstlCore:forEach var="x" begin="1" end="5">
                <div  id="pd<%=pd%>" style="display:none;"><div>Stage ${x}  <a onclick="disp(p<%=pd%>,t<%=pd%>);" id="p<%=pd%>">+</a>   </div>
            <table id="t<%=td%>" style="display:none;">
                <tr>
                    <td>Product No</td><td>Product Name</td><td>Quantity</td><td>Completed</td><td></td></tr>
                    <% if(od==1){ %>
                        
                        <jstlCore:set var="product" value="${requestScope.productList1}"></jstlCore:set><%}%>
                <% if(od==2){ %>
                        <jstlCore:set var="product" value="${requestScope.productList2}"></jstlCore:set><%}%>
                <% if(od==3){ %>
                        <jstlCore:set var="product" value="${requestScope.productList3}"></jstlCore:set><%}%>
                    
                    <jstlCore:forEach var="j"  items="${product}"><tr>
                     <td>${1}</td>
                        <td>${j.getName()}</td>
                        <td>${j.getQuantity()}</td>
                        <td>${requestScope.product_Processing111.getItemsProcessed()}</td><td></td></tr>
                    </jstlCore:forEach>
                
               <% td++; %> 
            </table><% pd++; %><% pdd++; %>
        </div></jstlCore:forEach>
            </div> <% od++; %>
        </jstlCore:forEach>
       <% int i;
          String order;
          Object oo=request.getAttribute("order_Details1");
          for(i=0;i<3;i++){  
               order="order_Details"+i;
   %>
           <jsp:useBean id="order_Details1" class="Entity.Order_Details" scope="request" />
       Order= <jsp:getProperty name="order_Details1" property="orderId" />
       <% } %>
       
       
       
    </body>
</html>
