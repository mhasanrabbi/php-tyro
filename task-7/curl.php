<?php
$status = "";
$msg = "";
$city = "";
if (isset($_POST['submit'])) {
    $city = $_POST['city'];
    $url = "http://api.openweathermap.org/data/2.5/weather?q=$city&appid=eaa8953efc60bac2b895ab04599da06a";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    $result = json_decode($result, true);
    if ($result['cod'] == 200) {
        $status = "yes";
    } else {
        $msg = $result['message'];
    }
}