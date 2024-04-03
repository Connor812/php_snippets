<?php

// Checks to see if the values are empty
if (empty($variable)) {
    header("Location: ");
    exit;
}

require_once("date base");

// Insert statement
$sql = "INSERT INTO `table_name` (`variable`) VALUES (?);";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    header("Location: ");
    $stmt->close();
    exit;
}

// Bind parameters to the prepared statement
$stmt->bind_param("s", $variable);

// Execute the statement
if ($stmt->execute()) {
    // Insertion successful
    header("Location: ");
    $stmt->close();
    exit;
} else {
    // Insertion failed
    header("Location: ");
    $stmt->close();
    exit;
}