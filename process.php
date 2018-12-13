<?php

// connect to the database 
$conn = mysqli_connect('localhost', 'root', '', 'db_ajax_test');

echo 'processing...';

// check for post variable 
if(isset($_POST['name'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    echo 'POST: Your name is '. $_POST['name'];

    $query = "INSERT INTO tblUsers(name) VALUES('$name')";
    
    if(mysqli_query($conn, $query)) {
        echo 'user added';
    } else {
        echo 'ERROR' . mysqli_error($conn);
    }
}

// check for get
if(isset($_GET['name'])) {
    echo 'GET: Your name is '. $_GET['name'];
}