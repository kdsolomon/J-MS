<?php
session_start();

// Define the correct username and password
$correct_username = 'family_member_1';
$correct_password = 'password123';

// Get the username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the username and password are correct
if ($username == $correct_username && $password == $correct_password) {
    // If they are correct, create a session variable to remember the user is logged in
    $_SESSION['loggedin'] = true;

    // Redirect to the family member page
    header('Location: family_pages/family_member_1.html');
} else {
    // If the username or password is incorrect, redirect back to the login page
    header('Location: index.html');
}
?>