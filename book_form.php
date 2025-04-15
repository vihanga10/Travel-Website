<?php
$connection = mysqli_connect('localhost', 'root', '', 'travel_book_db');

if (!$connection) {
    die('Connection failed: ' . mysqli_connect_error());
}

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving']; // Corrected variable name

    if (empty($name) || empty($email) || empty($phone) || empty($address) || empty($location) || empty($guests) || empty($arrivals) || empty($leaving)) {
        $error_message = "All fields are required!";
    }
    else {
    // Adjust column names to match your database structure
    $request = "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) 
                VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

    if (mysqli_query($connection, $request)) {
        $success_message = "Booking submitted successfully!";
        header('Location: book.php');
    } else {
        $error_message = "Error: " . $request . "<br>" . mysqli_error($connection);
    }
} }
else {
    echo 'Something went wrong. Please try again.';
}

mysqli_close($connection);
?>
