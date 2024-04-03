<?php

// Checks to see if values empty
if (empty($variable)) {
    header("Location: ");
    exit;
}

require_once("data base");

$sql = "DELETE FROM `table name` WHERE `variable` = ?;";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    header("Location: ");
    $stmt->close();
    exit;
}

$stmt->bind_param("i", $variable);

if ($stmt->execute()) {
    // Successful update
    header("Location: ");
    $stmt->close();
    exit;
} else {
    // Failed update
    header("Location: ");
    $stmt->close();
    exit;
}