<?php
// Include necessary files and start session
session_start();
include 'db_connect.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve email or username from the form
    $email_username = $_POST["email_username"];

    // Query your database to check if the email or username exists
    // Assuming your table structure includes a field for email and username
    $sql = "SELECT * FROM users WHERE username = '$email_username' OR username = '$email_username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, proceed with password reset
        $user = $result->fetch_assoc();

        // Generate a random password reset token
        $token = bin2hex(random_bytes(16));

        // Store the token in the database along with the user's ID and a timestamp
        $user_id = $user['id']; // Assuming your user table has a column named 'id'
        $timestamp = time(); // Current timestamp
        $insert_token_sql = "INSERT INTO password_reset_tokens (user_id, token, timestamp) VALUES ('$user_id', '$token', '$timestamp')";
        if ($conn->query($insert_token_sql) === TRUE) {
            // Send an email to the user with a link to reset their password
            $reset_link = "http://yourwebsite.com/reset_password.php?token=$token"; // Replace with your actual website URL
            $to = $user['username']; // Assuming your user table has a column named 'email'
            $subject = "Password Reset";
            $message = "Hello " . $user['username'] . ",\n\nPlease click the following link to reset your password:\n$reset_link";
            $headers = "From: snirajsingh567@gmail.com"; // Replace with your email address
            mail($to, $subject, $message, $headers);

            // Redirect the user to a page indicating that the password reset email has been sent
            header("Location: password_reset_email_sent.php");
            exit;
        } else {
            // Error occurred while inserting token into the database
            echo "Error: " . $conn->error;
        }
    } else {
        // User not found
        echo "User not found. Please check your email or username and try again.";
    }
}

// Close the database connection
$conn->close();
?>
