<?php
    $code = $_GET["code"];

    $grant_type = "authorization_code";
    $redirect_uri = "http%3A%2F%2Flocalhost/authLine/authentication.php";
    $client_id = "1617052632";
    $client_secret = "5698fb2ca1b671e2a573d731af46c9e7";

    $data = "grant_type=$grant_type&code=$code&redirect_uri=$redirect_uri&client_id=$client_id&client_secret=$client_secret";
    $curl = curl_init('https://api.line.me/oauth2/v2.1/token');
    $header = array('Content-Type: application/x-www-form-urlencoded');
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);
    $response = json_decode($result, true);

    echo '<a href="getFriendshipStatus.php?access_token='. $response["access_token"]. '">Get Friendship status</a>';

    //https://access.line.me/oauth2/v2.1/authorize?response_type=code&client_id=1617052632&redirect_uri=http://localhost/authLine&scope=profile&state=123