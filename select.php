<?php

$sql = "SELECT * FROM `table name`;";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // * Your Code here

    }
} else {
    // ! No data found
}