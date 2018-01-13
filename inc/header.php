<?php

    include_once 'db.php';
    include_once 'Classes/Account.php';

    if(isset($_SESSION['userLoggedIn'])){
        $userLoggedIn = new User($conn, $_SESSION['userLoggedIn']);
        $username = $userLoggedIn->getUsername();
        echo "User Logged In!";
    }

?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <title>Beach 2018</title>
</head>
<body>
