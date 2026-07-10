<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>

<!DOCTYPE html>
<html>

<head>

<title>Register Patient</title>

<link rel="stylesheet" href="css/style.css">

</head>


<body>

<%@ include file="includes/navbar.jsp" %>


<div class="container">


<h1>Patient Registration</h1>


<form action="RegisterPatientServlet" method="post">


<label>Patient ID</label>

<input 
type="text"
name="id"
placeholder="Enter patient ID"
required>


<label>Full Name</label>

<input 
type="text"
name="name"
placeholder="Enter patient name"
required>


<label>Age</label>

<input 
type="number"
name="age"
placeholder="Enter age"
min="1"
required>


<label>Gender</label>

<select name="gender" required>

<option value="">
Select gender
</option>

<option value="Male">
Male
</option>

<option value="Female">
Female
</option>

</select>


<label>Diagnosis</label>

<input 
type="text"
name="diagnosis"
placeholder="Enter diagnosis"
required>



<label>Admission Status</label>

<select name="admitted">

<option value="true">
Admitted
</option>

<option value="false">
Not Admitted
</option>

</select>


<input 
type="submit"
value="Register Patient">


</form>


<br>


<a class="button" href="index.jsp">
Back Home
</a>


</div>


</body>

</html>