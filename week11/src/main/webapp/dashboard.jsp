<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>


<%

String username = 
(String) session.getAttribute("username");


if(username == null){

    response.sendRedirect("login.jsp");

    return;

}

%>
<%

String theme = "light";


Cookie[] cookies =
request.getCookies();


if(cookies != null){

    for(Cookie cookie : cookies){

        if(cookie.getName().equals("theme")){

            theme = cookie.getValue();

        }

    }

}

%>


<!DOCTYPE html>
<html>

<head>

<title>Dashboard</title>

<link rel="stylesheet" href="css/style.css">

</head>


<body class="<%=theme%>">


<%@ include file="includes/navbar.jsp" %>


<div class="container">


<h1>
Welcome <%= username %>
</h1>
<p>
Session ID:
<%= session.getId() %>
</p>


<p>
Login Time:
<%= session.getAttribute("loginTime") %>
</p>


<div class="card">


<h2>
EHealth Dashboard
</h2>


<p>
Manage patient records and monitor admissions.
</p>


<a class="button" href="ViewPatientServelet">
View Patients
</a>


<a class="button" href="AdmittedPatientsServelet">
Admissions
</a>


<br><br>


<a class="button" href="LogoutServlet">
Logout
</a>


</div>


</div>


</body>

</html>