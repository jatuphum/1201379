<?php
$data     = ;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://202.28.34.201/api2/checklogin2.php");
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
