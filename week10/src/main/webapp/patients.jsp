<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>

<%@ page import="java.util.List" %>
<%@ page import="com.ehealth.Patient" %>
<%
session.setMaxInactiveInterval(300);
if(session.getAttribute("username") == null){

    response.sendRedirect("login.jsp");

    return;

}

%>


<!DOCTYPE html>
<html>

<head>

<title>Patients</title>

<link rel="stylesheet" href="css/style.css">

</head>


<body>

<%@ include file="includes/navbar.jsp" %>


<div class="container">


<h1>Patient Records</h1>


<%

List<Patient> patients =
(List<Patient>) request.getAttribute("patients");

int totalPatients = 0;

if(patients != null){
    totalPatients = patients.size();
}

%>


<div class="card">

<h2>
Total Registered Patients
</h2>

<h1>
<%= totalPatients %>
</h1>

</div>



<h2>Patient List</h2>


<table>


<tr>

<th>ID</th>

<th>Name</th>

<th>Age</th>

<th>Gender</th>

<th>Diagnosis</th>

<th>Status</th>

</tr>



<%

if(patients != null){

for(Patient p : patients){

%>


<tr>

<td>
<%= p.getId() %>
</td>


<td>
<%= p.getName() %>
</td>


<td>
<%= p.getAge() %>
</td>


<td>
<%= p.getGender() %>
</td>


<td>
<%= p.getDiagnosis() %>
</td>


<td>

<%= p.isAdmitted() ? "Admitted" : "Not Admitted" %>

</td>


</tr>


<%

}

}

%>



</table>


<br>


<a class="button" href="register.jsp">
Add New Patient
</a>


</div>


</body>


</html>