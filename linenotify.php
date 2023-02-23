<?php
$token = ""; // ใส่ Token ที่สร้างไว้
$headers = array('Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer ' . $token . '');
$data     = 'message=ใส่ข้อความที่นี่';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://notify-api.line.me/api/notify");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);

if (curl_error($ch)) {
    echo 'error:' . curl_error($ch);
} else {
    $res = json_decode($result, true);
    echo "status : " . $res['status'];
    echo "message : " . $res['message'];
}
curl_close($ch);
?>