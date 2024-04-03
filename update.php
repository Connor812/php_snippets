<?php

if (empty($variable)) {
    header("Location: ");
    exit;
}

require_once("data base name");

// ? Update statement
$sql = "UPDATE `table name` SET `column` = ? WHERE id = ?;";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    header("Location: ");
    $stmt->close();
    exit;
}

$stmt->bind_param("si", $variable, $id);

// ? This checks the execute statement
if ($stmt->execute()) {
    // ? Check the number of affected rows
    if ($stmt->affected_rows > 0) {
        // * Successful update
        header("Location: ");
        $stmt->close();
        exit;
    } else {
        // ! No rows were updated
        header("Location: ");
        $stmt->close();
        exit;
    }
} else {
    // ! Failed update
    header("Location: ");
    $stmt->close();
    exit;
}





