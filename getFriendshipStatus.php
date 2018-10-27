<?php
    $access_token = $_GET["access_token"];
    $header = array('Authorization: Bearer '.$access_token);

    $curl = curl_init('https://api.line.me/friendship/v1/status');
    curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($curl);
    echo $result;