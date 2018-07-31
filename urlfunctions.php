<?php
$url = $_SERVER['PHP_SELF'];
$cutline = "Dan";
echo substr($url, (strlen($cutline) + strpos($url, $cutline)));
