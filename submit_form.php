<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $curriculum = $_POST["curriculum"];
    $percentage = $_POST["percentage"];
    $state = $_POST["state"];
    $interest = $_POST["interest"];
    $others = $_POST["others"];

    // Process and store the form data as needed
    // You can save the data to a database or send it via email

    echo "Application submitted successfully!";
}
?>