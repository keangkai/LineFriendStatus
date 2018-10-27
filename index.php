<?php
    $redirect_uri = "http%3A%2F%2Flocalhost/authLine/authentication.php";
    $client_id = "1617052632";
    $client_secret = "5698fb2ca1b671e2a573d731af46c9e7";
    $scope = "profile";
    $bot_prompt = "normal";
    $prompt = "consent";
    $state = 123;

    $authenLink = "https://access.line.me/oauth2/v2.1/authorize?response_type=code&client_id=$client_id&redirect_uri=$redirect_uri&scope=$scope&state=$state&bot_prompt=$bot_prompt&prompt=$prompt";
    echo '<a href="'.$authenLink.'">Login With Line</a>';
