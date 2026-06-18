# Week 6: Database Integration and CRUD Operations

## Learning Objectives

Connect a PHP web application to a MySQL database.

Implement Create, Read, Update, and Delete (CRUD) operations.

Design and integrate forms for data entry and record management.

Retrieve and display database records from MySQL.

Test and debug database-driven applications.

Apply prepared statements for basic security.

---

## Demonstrations

### Demonstration 1: Database Creation

Database created: `runi_empire_db`

Tables:
- users
- bookings

Sample records inserted using SQL scripts.

---

### Demonstration 2: PHP Database Connection

Application connected to MySQL using a centralized connection file:

includes/db_connect.php

Connection verified through test scripts.

---

### Demonstration 3: User Registration Form

Users can register through signup form.

Data is stored in `users` table.

---

### Demonstration 4: Display Records

Registered users are retrieved using SQL SELECT queries.

Data displayed in dashboard table view.

---

### Demonstration 5: Update and Delete Records

Users can be modified and deleted using SQL UPDATE and DELETE operations.

---

## Class Activities

### Activity 1: Registration Form

Fields:
Full Name, Email, Course

Data stored in MySQL database.

---

### Activity 2: Display Records

All records retrieved from database and displayed in tabular format.

---

### Activity 3: Edit and Delete Records

Records can be updated or removed using CRUD operations.

---

## Practical Tasks

### Student Management System

Features:
Add students
View students
Edit students
Delete students

---

### Library Management System

Stores:
Book ID, Title, Author, Category

Full CRUD implementation.

---

### Employee Management System (Challenge)

Features:
Employee registration
View records
Update details
Delete records
Search functionality
User login support

---

## Database Integration

Database: runi_empire_db

Tables:
users
bookings

All database connections handled via:

includes/db_connect.php

---

## GitHub Submission

Repository:
BIT3208-Week6-CRUD

Includes:
Source code
Database export file
Screenshots
Documentation