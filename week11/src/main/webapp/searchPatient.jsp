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

<title>Search Patients</title>

<link rel="stylesheet" href="css/style.css">

</head>


<body>


<%@ include file="includes/navbar.jsp" %>


<div class="container">


<h1>Search Patients</h1>


<div class="card">


<form action="SearchPatientServelet" method="get">



<label>
Patient Name
</label>


<input 
type="text"
name="name"
placeholder="Enter patient name"
required>


<br><br>


<button type="submit">
Search
</button>


</form>


</div>



<%

List<Patient> patients =
(List<Patient>) request.getAttribute("patients");

%>



<%

if(patients != null){

%>


<h2>
Search Results
</h2>


<table>


<tr>

<th>ID</th>

<th>Name</th>

<th>Age</th>

<th>Gender</th>

<th>Diagnosis</th>

<th>Status</th>

<th>Actions</th>

</tr>



<%

for(Patient p : patients){

%>


<tr>


<td>
<%=p.getId()%>
</td>


<td>
<%=p.getName()%>
</td>


<td>
<%=p.getAge()%>
</td>


<td>
<%=p.getGender()%>
</td>


<td>
<%=p.getDiagnosis()%>
</td>


<td>
<%=p.isAdmitted() ? "Admitted" : "Not Admitted"%>
</td>


<td>

<a href="EditPatientServelet?id=<%=p.getId()%>">
Edit
</a>


|

<a href="DeletePatientServelet?id=<%=p.getId()%>"
onclick="return confirm('Delete this patient?');">
Delete
</a>


</td>


</tr>


<%

}

%>


</table>


<%

}

%>



<br>


<a class="button" href="ViewPatientServelet">
Back to Patients
</a>


</div>


</body>

</html>