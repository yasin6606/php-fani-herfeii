<?php
require_once('./../db/config.php');


$title = $_POST['productTitle'];
$author = $_POST['productAuthor'];
$price = $_POST['productPrice'];
$age = $_POST['productAge'];
$category = $_POST['productCategory'];


$savingQuery = "INSERT INTO products (title,author,price,age,category) VALUES ('$title','$author','$price','$age','$category')";

if ($conn->query($savingQuery)) {
    header("location: ./successfullyReg.php");
} else {
    echo "<br />"
        . $conn->error;
};

$conn->close();
