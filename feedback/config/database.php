<?php
const DB_HOST = "localhost";
const DB_USER = "vlahd";
const DB_PASS = "123456";
const DB_NAME = "php_dev";

// create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// check the connection
if ($conn->connect_error) {
    die('Connection failed ' . $conn->connect_error);
}

// echo "Connected Successfully";
