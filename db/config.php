<?php

$serverName = "localhost";
$username = "root";
$password = "yassin";
$db = "faniherfeiiphpproject";

// Create connection
$conn = new mysqli($serverName, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo '<div class="container my-4 text-right" style="direction: rtl ; font-family: Vazir ; ">'
    . '<div class="row">'
    . '<div class="col">'
    . '<h6">'
    . '<i class="fa fa-link text-success" aria-hidden="true"></i>'
    . '<span class="text-success px-3">ارتباط با سرور برقرار است</span>'
    . '</h6>'
    . '</div>'
    . '<div class="col text-left">'
    . '<a href="./../index.php" class="text-primary text-decoration-none">'
    . '<span class="px-3">بازگشت به صفحه قبل</span>'
    . '<i class="fa fa-arrow-left" aria-hidden="true"></i>'
    . '</div>'
    . '</div>'
    . '</div>';
