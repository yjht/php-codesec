<?php

$data = json_decode(file_get_contents('php://input'));
$query = "SELECT * FROM users WHERE user.login='".$data['login'] . "' AND user.password='" . $data['password'] ."'";
$stmt = $conn->prepare($query);

if ( ! $stmt->execute()) {
    echo("Bad credential provided: " . $data['login']." / ".$data['password']);
} else {
    /* .. do whatever the application is expected to do . */
}
