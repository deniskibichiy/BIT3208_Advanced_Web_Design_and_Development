<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>

<!DOCTYPE html>
<html>

<head>

<title>Login</title>

<link rel="stylesheet" href="css/style.css">

</head>


<body>


<%@ include file="includes/navbar.jsp" %>


<div class="container">


<h1>EHealth System Login</h1>


<form action="LoginServlet" method="post">


<label>Username</label>

<input 
type="text"
name="username"
placeholder="Enter username"
required>


<label>Password</label>

<input
type="password"
name="password"
placeholder="Enter password"
required>
<label>
<input type="checkbox" name="remember">
    Remember Me
</label>

<input 
type="submit"
value="Login">


</form>


</div>


</body>

</html>