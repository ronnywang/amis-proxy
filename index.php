<?php

$curl = curl_init('https://aws.ronny.tw/callback');
$post_params = array();
foreach ($_POST as $k => $v) {
    $post_params[] = urlencode($k) . '=' . urlencode($v);
}
curl_setopt($curl, CURLOPT_POSTFIELDS, implode('&', $post_params));
curl_exec($curl);
