<?php $ch = curl_init("https://repo.packagist.org/packages.json"); curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); $res = curl_exec($ch); echo $res ? "CONEXION SSL EXITOSA" : curl_error($ch);
