<?php

// Simple function to calculate the number of days between two dates
function calculateDaysDifference($start_date, $end_date) {
    
    // Convert the dates to timestamps
    $start_timestamp = strtotime($start_date);
    $end_timestamp = strtotime($end_date);

    // Calculate the difference in seconds and then convert to days
    $difference_in_seconds = $end_timestamp - $start_timestamp;
    $days_difference = $difference_in_seconds / (60 * 60 * 24);

    return $days_difference;
}
?>
