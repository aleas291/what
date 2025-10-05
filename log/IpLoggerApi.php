<?php
require_once __DIR__ . '/lo.php';
$logger = new IpLogger();
$logger->write('ipsLog.txt', 'Europe/Athens');
?>