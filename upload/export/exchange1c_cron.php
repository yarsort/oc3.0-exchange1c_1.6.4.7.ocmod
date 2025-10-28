<?php

$ch = curl_init(HTTP_SERVER . "export/exchange1c.php?module=cronImport");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec ($ch);
curl_close ($ch);

?>