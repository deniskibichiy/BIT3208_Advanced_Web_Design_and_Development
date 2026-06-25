# Week 7: User Authentication and Session Management

## Learning Objectives

- Implement user authentication using PHP and MySQL.
- Secure passwords using hashing techniques.
- Manage user sessions for login state persistence.
- Restrict access to protected pages.
- Implement logout functionality safely.
- Improve security in database-driven applications.

---
# Week 7: User Authentication and Session Management

## Learning Objectives

Connect a PHP web application to a MySQL database with secure authentication flows.

Implement user registration with password hashing and secure login validation.

Manage user sessions to maintain authenticated state across pages.

Implement role-based access control (user, admin, super_admin).

Secure dashboard and restrict unauthorized access.

Perform basic CRUD operations with controlled permissions.

Integrate relational database structure for users, services, and bookings.

---

## System Overview

The application is a role-based service booking system built using PHP and MySQL.

It supports:

- User authentication  
- Role-based dashboards  
- Service booking functionality  
- Admin user management  
- Database-driven session control  

---

## Database Structure

### users
- id  
- name  
- email  
- phone  
- password (hashed)  
- role  
- created_at  

### services
- id  
- service_name  
- price  
- description  

Predefined services:
- Shaving  
- Massage  
- Facial Scrubbing  

### bookings
- id  
- user_id (FK → users.id)  
- service_id (FK → services.id)  
- booking_date  
- created_at  

---

## Authentication Flow

### Registration
- User submits registration form  
- Password is hashed using `password_hash()`  
- Data is stored in `users` table  

### Login
- User submits email and password  
- System retrieves user record  
- Password verified using `password_verify()`  
- Session variables created:
  - user_id  
  - user_name  
  - role  
  - logged_in  

---

## Session Management

All protected pages verify session state before access.

Unauthorized users are redirected to login page.

---

## Role-Based Access Control

### user
- Access dashboard  
- Book services  
- View personal bookings  

### admin
- View all users  
- Edit user details  
- Delete users (excluding super admin)  
- View system data  

### super_admin
- Full system access  
- Manage all users and admins  
- Override restrictions  

---

## Booking System

### User Flow
- Select service from dropdown  
- Choose booking date  
- Submit request  
- Stored in `bookings` table using `service_id`  

---

## CRUD Operations

### Create
- User registration  
- Service booking  

### Read
- View users (admin/super admin)  
- View bookings (planned/admin feature)  

### Update
- Edit user details (admin/super admin)  

### Delete
- Remove users with role restrictions  

---

## Security Measures

- Password hashing (`password_hash`)  
- Password verification (`password_verify`)  
- Session-based authentication  
- Role-based access restrictions  
- Foreign key relational integrity in bookings  

---