<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>

<%@ page import="com.ehealth.Patient" %>


<%

Patient patient = 
(Patient) request.getAttribute("patient");


if(patient == null){

    response.sendRedirect("ViewPatientServelet");

    return;

}

%>


<!DOCTYPE html>
<html>

<head>

<title>Edit Patient</title>

<link rel="stylesheet" href="css/style.css">

</head>


<body>


<%@ include file="navbar.jsp" %>


<div class="container">


<h1>Edit Patient Details</h1>


<div class="card">


<form action="UpdatePatientServelet" method="post">


<label>
Patient ID
</label>

<input 
type="text"
name="id"
value="<%=patient.getId()%>"
readonly>


<br>


<label>
Name
</label>

<input 
type="text"
name="name"
value="<%=patient.getName()%>"
required>


<br>


<label>
Age
</label>

<input 
type="number"
name="age"
value="<%=patient.getAge()%>"
required>


<br>


<label>
Gender
</label>

<select name="gender">


<option value="Male"
<%=patient.getGender().equals("Male") ? "selected" : ""%>>
Male
</option>


<option value="Female"
<%=patient.getGender().equals("Female") ? "selected" : ""%>>
Female
</option>


</select>


<br>


<label>
Diagnosis
</label>

<input 
type="text"
name="diagnosis"
value="<%=patient.getDiagnosis()%>"
required>


<br>


<label>
Admission Status
</label>


<select name="admitted">


<option value="true"
<%=patient.isAdmitted() ? "selected" : ""%>>
Admitted
</option>


<option value="false"
<%=!patient.isAdmitted() ? "selected" : ""%>>
Not Admitted
</option>


</select>


<br><br>


<button type="submit">
Update Patient
</button>


</form>


</div>


</div>


</body>

</html>