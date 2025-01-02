<?php
// Path to the file where the usage count is stored
$counterFile = "usage_count.txt";

// Check if the file exists, if not, initialize it
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, '0');
}

// If this is a POST request, increment the usage count
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Read the current count from the file
    $currentCount = (int) file_get_contents($counterFile);

    // Increment the count
    $currentCount++;

    // Write the updated count back to the file
    file_put_contents($counterFile, $currentCount, LOCK_EX); // Use LOCK_EX to prevent race conditions

    // Return the updated count as JSON
    echo json_encode(['count' => $currentCount]);

} else {
    // For GET requests, just return the current count
    $currentCount = (int) file_get_contents($counterFile);

    // Return the current count as JSON
    echo json_encode(['count' => $currentCount]);
}





