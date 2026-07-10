<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>


<!DOCTYPE html>
<html>

<head>

<title>Admission Dashboard</title>

<link rel="stylesheet" href="css/style.css">

</head>


<body>


<%@ include file="includes/navbar.jsp" %>



<div class="container">


<h1>Admission Dashboard</h1>



<div class="card">


<h2>
Currently Admitted Patients
</h2>



<h1>
${count}
</h1>


<p>
Patients currently requiring hospital attention.
</p>


</div>



<br>


<a class="button" href="ViewPatientServelet">
View Patient Records
</a>


</div>



</body>

</html>