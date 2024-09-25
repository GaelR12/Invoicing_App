<!DOCTYPE html>
<html>
<head>
    <title>Date Checker</title>
    <style>

   
    body {
    font-family: Arial, sans-serif;
    margin: 20px;
}
.container {
    max-width: 600px;
    margin: auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #f9f9f9;
}
label {
    font-weight: bold;
    margin-top: 10px;
}
input {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}
button {
    padding: 10px 20px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
button:hover {
    background-color: #218838;
}
.message {
    margin-top: 20px;
    font-size: 16px;
}
</style>

</head>
<body>
<?php

// Include the functions file
include 'functions.php';

// Checks if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Get the submitted dates
    $invoice_date = $_POST['invoice_date'];
    $expiration_date = $_POST['expiration_date'];

    // Calculate the number of days between the two dates
    $days_difference = calculateDaysDifference($invoice_date, $expiration_date);

    // Display a message based on whether the expiration date is in the past or future
    if ($days_difference->invert ) {
        echo "The expiration date has passed by " . abs($days_difference->d) . " days.";
    } else {
        echo "The expiration date is in " . $days_difference->d . " days.";
    }

}
?>
    <h1>Check Invoice and Expiration Date</h1>
    <?php include 'form.php'; ?>
</body>
</html>
