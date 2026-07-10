<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>


<%

String username =
(String) session.getAttribute("username");


if(username == null){

    response.sendRedirect("login.jsp");

}
else {

    response.sendRedirect("dashboard.jsp");

}

%>