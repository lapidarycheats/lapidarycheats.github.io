<?php
$httpHost = $_SERVER['HTTP_HOST'];
$explodedHttpHost = explode('.', $httpHost);
$subDomainName = $explodeHttpHost[0];
//
echo $subDomainName;
?>
