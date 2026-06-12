# Week 6: Database Integration and CRUD Operations

## Learning Objectives

Connect a PHP web application to a MySQL database.

Implement Create, Read, Update, and Delete (CRUD) operations.

Integrate existing and design new forms for data entry and record management.

Retrieve and display database records.

Test and debug database-driven functionality.

Apply basic database security practices using prepared statements.

## Planned Features

### Create

Finetune the user registration form that stores user information in the `users` table.

### Read

Display registered users in a dashboard and retrieve records using SQL queries.

### Update

Allow modification of user details using SQL UPDATE statements.

### Delete

Allow removal of user records using SQL DELETE statements.

## Database Integration

The application uses the `runi_empire_db` database.

The primary tables are `users` and `bookings`.

The application uses a centralized database connection through:

`includes/db_connect.php`