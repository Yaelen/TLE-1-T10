<?php
// Start the session.
session_start();
// destroy the session.
session_destroy();

// Redirect to login page
echo 'bye bye';


header('Location: login.php');

// Exit the code.


