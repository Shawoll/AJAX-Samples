<?php

// connect to the database 
$conn = mysqli_connect('localhost', 'root', '', 'db_ajax_test');

$query = 'SELECT * FROM tblUsers';

$result = mysqli_query($conn, $query);

$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($users);