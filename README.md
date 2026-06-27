# Runi Empire Barber Shop Booking System

## Overview
Runi Empire is a web-based barber shop booking system built using PHP and MySQL. It is developed incrementally across weekly milestones, covering environment setup, UI planning, frontend scripting, backend processing, and database-driven application development. The system simulates a real-world booking platform with authentication, service management, and booking workflows.

## Tech Stack
PHP, MySQL, Apache (XAMPP), HTML, CSS, JavaScript

## Setup Instructions
1. Install XAMPP (Apache + MySQL)
2. Clone this repository into the `htdocs` directory
3. Start Apache and MySQL from XAMPP control panel
4. Open:
   `http://localhost/BIT3208_Runi_Empire/`
5. Import `.sql` files from each weekly folder when required

## Development Approach
The project follows an incremental development model where each week builds on the previous one. This includes environment setup, UI design, scripting, backend logic, and database integration. Each stage is preserved in separate folders to demonstrate progression and version control.

---

## Weekly Progress

### Week 1 – Environment Setup & Database Connection
XAMPP installation and configuration  
Apache and MySQL verification  
Localhost test page creation  
Basic PHP execution  
MySQL database creation  
Database connection test (`db_test.php`)  
Initial database export (`Week1db.sql`)

### Week 2 – UI Design & Prototyping
Hand-drawn wireframes (login, homepage, dashboard, mobile view)  
Dashboard layout design  
Mobile view mockup  
Color theme and navigation structure  
GUI prototype using Figma/Canva/draw.io

### Week 3 – Frontend Scripting & Backend Basics
JavaScript fundamentals (variables, events, DOM manipulation)  
Form validation (login, email, password checks)  
Dynamic UI interactions  
PHP basics (syntax, forms handling, output)  
Database connection practice

### Week 4 – Server-Side Processing & Authentication
Understanding server-side programming concepts  
Form handling using GET and POST methods  
PHP form processing systems  
Basic authentication logic (login validation)  
Session handling introduction  
Backend folder structure organization  
Database connection reinforcement

### Week 5 – Database Systems & CRUD Operations
Introduction to relational databases  
Database and table creation using SQL  
CRUD operations (Create, Read, Update, Delete)  
PHP-MySQL integration for data retrieval  
Login database integration concepts  
SQL query execution and testing  
Foundation for dynamic data-driven applications

## Version Control Practice
Each week is stored independently to reflect incremental development  
Weekly folders (Week1–Week5)  
Database exports per week  
Screenshots for evidence  
GitHub commits per milestone
# Week 6 Project Reflection

## Weekly Reflection Questions and Answers

### 1. Why are databases important in web applications?
Databases provide persistent storage for application data such as users, transactions, and system records. They allow web applications to store, retrieve, update, and manage structured data efficiently instead of relying on temporary memory or static files.

---

### 2. What is the difference between static and dynamic websites?
Static websites serve fixed content that does not change unless manually edited in source files. Dynamic websites generate content in real time based on user input, server-side logic, or database queries (e.g., PHP with MySQL integration).

---

### 3. Explain CRUD operations with examples.
CRUD refers to Create, Read, Update, and Delete operations performed on database records.

- Create: inserting a new user into the database during signup
- Read: retrieving and displaying users in a table
- Update: modifying existing user details such as email or phone number
- Delete: removing a user record from the database

---

### 4. How does PHP communicate with MySQL?
PHP communicates with MySQL using PDO or MySQLi. It sends SQL queries to the database server, executes them, and retrieves results which can then be processed or displayed in the application.

---

### 5. Why should developers validate user input?
Input validation ensures that data entered by users is correct, consistent, and safe. It prevents invalid data from being stored and reduces security risks such as SQL injection and system errors.

---

### 6. What security risks can arise from poor database design?
Poor database design can lead to:
- SQL injection vulnerabilities
- Data duplication and inconsistency
- Unauthorized data access
- Weak password storage practices
- Reduced performance and scalability issues
## Week 7 Reflection Questions

1. What is authentication?  
Authentication is the process of verifying the identity of a user attempting to access a system, typically using credentials such as email and password.

2. How does authorization differ from authentication?  
Authentication verifies who a user is, while authorization determines what an authenticated user is allowed to do within the system based on assigned roles or permissions.

3. Why should passwords be hashed?  
Passwords should be hashed to ensure they are not stored in plain text. Hashing protects user credentials in case of database compromise and reduces the risk of credential exposure.

4. What is the purpose of sessions?  
Sessions are used to maintain user state across multiple pages after login. They allow the system to remember authenticated users without requiring repeated login.

5. Why are protected pages important?  
Protected pages are important to restrict access to sensitive or role-based functionality, ensuring only authenticated users can access certain resources.

6. What are the dangers of SQL injection?  
SQL injection is a security vulnerability where malicious SQL code is inserted into queries. It can lead to unauthorized data access, data corruption, or full system compromise if inputs are not properly handled.

7. How does logout improve security?  
Logout improves security by terminating the active session, preventing unauthorized access from reused or hijacked session data, especially on shared or public devices.
---
## Week 8 Revision Questions

### 1. What is Responsive Web Design?
Responsive Web Design is an approach where web pages adapt to different screen sizes and devices using flexible layouts, media queries, and scalable elements.



### 2. Why is Mobile-First Design important?
Mobile-first design ensures the website is optimized for smaller screens first, improving performance, usability, and progressive enhancement for larger screens.



### 3. Explain the role of media queries.
Media queries allow CSS rules to be applied conditionally based on device characteristics such as screen width, height, or orientation.



### 4. Differentiate between Flexbox and CSS Grid.
Flexbox is designed for one-dimensional layouts (row or column), while CSS Grid is designed for two-dimensional layouts (rows and columns simultaneously).



### 5. What is the purpose of the viewport meta tag?
It controls how a webpage is displayed on mobile devices, ensuring proper scaling and responsiveness.

Example:
```html
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
```
### 6. How do responsive images improve user experience?

Responsive images adjust to different screen sizes, reducing load time and preventing layout overflow or distortion on smaller devices.



### 7. Explain the advantages of responsive websites.

Better mobile usability  
Improved SEO rankings  
Reduced maintenance (single codebase)  
Consistent experience across devices  



### 8. Write a CSS media query for screens smaller than 768px.

```css
@media (max-width: 768px) {
    body {
        font-size: 14px;
    }
}
```
### 9. How does CSS Grid help create responsive layouts?

CSS Grid allows developers to define 
flexible row and column structures that automatically adjust to screen size, making layout design more controlled and adaptive.


### 10. Describe two methods used to test responsive websites.

Browser DevTools device simulation (Chrome/Firefox responsive mode)  
Physical testing on different devices (mobile, tablet, desktop)
