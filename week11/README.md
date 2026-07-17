# EHealth Patient Management System

## Project Overview

EHealth Patient Management System is a Java-based web application developed using Java Servlets, JSP, Apache Tomcat, and MySQL. The system is designed to manage patient information in a simple healthcare environment.

The current version focuses on patient record management, allowing users to register patients, view patient records, and monitor admitted patients.

Future enhancements will introduce authentication, user sessions, protected dashboards, and improved access control.

---

## Technologies Used

* Java
* Java Servlets
* JavaServer Pages (JSP)
* Apache Tomcat 10.1
* MySQL Database
* JDBC (Java Database Connectivity)
* HTML/CSS
* Eclipse IDE for Enterprise Java and Web Developers

---

## Current Features

### 1. Patient Registration

Users can register new patients through a JSP-based registration form.

Captured information includes:

* Patient ID
* Patient name
* Age
* Gender
* Diagnosis
* Admission status

Patient information is stored in a MySQL database using JDBC.

---

### 2. View Patient Records

The system retrieves stored patient information from MySQL and displays it in a structured table.

Displayed information:

* Patient ID
* Name
* Age
* Gender
* Diagnosis
* Admission status

---

### 3. Admission Monitoring

The system calculates and displays the number of currently admitted patients.

This provides a simple overview of patients requiring hospital attention.

---

## Project Structure

```
EHealthPlatform
│
├── src/main/java
│   └── com.ehealth
│       │
│       ├── Patient.java
│       ├── DatabaseConnection.java
│       ├── PatientDAO.java
│       │
│       ├── RegisterPatientServlet.java
│       ├── ViewPatientServelet.java
│       └── AdmittedPatientsServelet.java
│
├── src/main/webapp
│   │
│   ├── index.jsp
│   ├── register.jsp
│   ├── patients.jsp
│   ├── admitted.jsp
│   │
│   ├── css
│   │   └── style.css
│   │
│   ├── includes
│   │   └── navbar.jsp
│   │
│   └── WEB-INF
│       └── web.xml
│
├── database.sql
└── README.md
```

---

## Database Configuration

Database name:

```
ehealth
```

Table:

```
patients
```

Table structure:

| Column    | Type         |
| --------- | ------------ |
| id        | VARCHAR(20)  |
| name      | VARCHAR(100) |
| age       | INT          |
| gender    | VARCHAR(20)  |
| diagnosis | VARCHAR(100) |
| admitted  | BOOLEAN      |

---

## Database Setup

1. Open MySQL.

2. Create the database:

```sql
CREATE DATABASE ehealth;
```

3. Select the database:

```sql
USE ehealth;
```

4. Create the patients table:

```sql
CREATE TABLE patients (
    id VARCHAR(20) PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    gender VARCHAR(20),
    diagnosis VARCHAR(100),
    admitted BOOLEAN
);
```

---

## Running the Application

Requirements:

* JDK installed
* Eclipse Enterprise Java IDE
* Apache Tomcat 10.1
* MySQL Server
* MySQL JDBC Connector

Steps:

1. Import the project into Eclipse.
2. Configure Apache Tomcat 10.1.
3. Ensure MySQL is running.
4. Configure database credentials in:

```
DatabaseConnection.java
```

5. Run the project using:

```
Run As → Run on Server
```

6. Open:

```
http://localhost:8080/EHealthPlatform/
```

---

## Current Architecture

```
JSP Pages
    |
    |
Servlet Controllers
    |
    |
PatientDAO
    |
    |
MySQL Database
```

The application follows a basic MVC-style structure:

* JSP handles the presentation layer.
* Servlets handle requests and application flow.
* DAO handles database operations.
* MySQL provides persistent storage.

---

## Planned Enhancements

The next development phase will introduce authentication and session management.

Planned features:

1. User login page
2. Login servlet
3. HTTP session creation
4. Protected dashboard
5. Logout functionality
6. Cookie-based features such as Remember Me

The authentication architecture will follow:

```
Login Page
      |
      ↓
Login Servlet
      |
      ↓
Create HttpSession
      |
      ↓
Protected Dashboard
      |
      ↓
Logout Servlet
      |
      ↓
Destroy Session
```

This will transform the application from a patient management prototype into a complete secured web application.
