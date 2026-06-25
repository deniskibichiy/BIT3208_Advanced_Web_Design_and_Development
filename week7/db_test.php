<?php

require_once 'database/db.php';

try {

    $stmt = $pdo->query("SELECT * FROM users");

    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<h2>Database Connection Successful</h2>";

    if (count($users) === 0) {
        echo "<p>No users found.</p>";
    } else {

        echo "<table border='1' cellpadding='10'>";

        echo "<tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
              </tr>";

        foreach ($users as $user) {

            echo "<tr>";

            echo "<td>" . $user['id'] . "</td>";
            echo "<td>" . $user['first_name'] . "</td>";
            echo "<td>" . $user['last_name'] . "</td>";
            echo "<td>" . $user['email'] . "</td>";
            echo "<td>" . $user['phone_number'] . "</td>";

            echo "</tr>";
        }

        echo "</table>";
    }

} catch (PDOException $e) {

    echo "Error: " . $e->getMessage();

}