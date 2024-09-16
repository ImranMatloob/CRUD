<?php

function connectionTest($connection) {
    if (!$connection) {
        throw new Exception("Connection failed: " . mysqli_connect_error());
    }
}

$connect = mysqli_connect("db", "user", "password", "docker_php");

// Check connection
connectionTest($connect);