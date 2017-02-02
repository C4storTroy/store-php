<?php
$conn = mysqli_connect('database', 'root', 'store', 'store');
if ($result = mysqli_query($conn, "SELECT DATABASE()")) {
    $row = mysqli_fetch_row($result);
    printf("Default database is %s.\n", $row[0]);
    mysqli_free_result($result);
}

//just php code whithout html we don't need to close php
//118.93.240.158/32
