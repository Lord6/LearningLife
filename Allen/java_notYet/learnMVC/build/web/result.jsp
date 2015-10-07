<%-- 
    Document   : result
    Created on : 2015/6/15, 上午 12:07:31
    Author     : user
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@ page import ="com.temp.model.User"%>
<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>result</title>
    </head>
    <body>
        <h1>you entered following information</h1>
 <%
     User user=(User)request.getAttribute("user");
  
 %>
 <%=user.getName()%><br/>
 <%=user.getEmail()%><br/>
    </body>
</html>
