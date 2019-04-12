<?php
    //uses weather unlocked api to get the current weather data for 50421
    $curlSession = curl_init();

    if ($curlSession) 
    {
        $currentWeatherUrl = "http://api.weatherunlocked.com/api/current/us.21043?app_id=f6ee9740&app_key=868bc5c64590fa78b3915f2ab263cae1";
 
        curl_setopt($curlSession, CURLOPT_URL, $currentWeatherUrl);
        curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlSession, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curlSession, CURLOPT_HTTPHEADER, array('Accept: application/json',));
        
        $weatherWidget = curl_exec($curlSession);
        
        //var_dump($weatherWidget);
        //var_dump(curl_error($curlSession));

        //turns returned data from json to php
        $weatherWidget = json_decode($weatherWidget, true);

        //var_dump($weatherWidget);

        curl_close($curlSession);
    }

    require_once("../tpl/weather-widget.tpl.php");
?>