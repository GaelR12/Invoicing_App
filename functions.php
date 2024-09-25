<?php

// Simple function to calculate the number of days between two dates
function calculateDaysDifference($start_date, $end_date) {
    
    // Convert the dates to timestamps
    $start_timestamp = new DateTime($start_date);
    $end_timestamp = new DateTime($end_date);

    // Calculate the difference in seconds and then convert to days
    $difference_in_seconds = $start_timestamp->diff ($end_timestamp);

    return $difference_in_seconds;

}

?>
