<?php
$ch = curl_init("https://api.att.com/rest/sms/2/messaging/outbox?access_token=7f0f57e53828b32369e946a42f6d66e4");
$encoded = '';
// include GET as well as POST variables; your needs may vary.
foreach($_GET as $name => $value) {
  $encoded .= urlencode($name).'='.urlencode($value).'&';
}
foreach($_POST as $name => $value) {
  $encoded .= urlencode($name).'='.urlencode($value).'&';
}
// chop off last ampersand
$encoded = substr($encoded, 0, strlen($encoded)-1);
curl_setopt($ch, CURLOPT_POSTFIELDS,  $encoded);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_exec($ch);
curl_close($ch);
?>
