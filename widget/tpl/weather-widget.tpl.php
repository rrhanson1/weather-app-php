<link rel="stylesheet" type="text/css" href="../public/weather-widget-styles.css">

<div class="container">
    <span class="head"><h2><span class="location">Belmond, IA </span><br>Current Weather</h2>
    <h4><img src="weather_images/<?php echo $weatherWidget['wx_icon']; ?>"/></h3>
    <h3> <?php echo $weatherWidget['wx_desc']; ?></h4>
    <h4><?php echo round($weatherWidget['temp_f']); ?> &#x2109; <br><span class="current-temp">Current Temp</span></h4>
    <h4><?php echo round($weatherWidget['feelslike_f']); ?> &#x2109; <br><span class="current-temp">Feels Like</span></h4>
    
    <p>Humidity: <span class="other-info"><?php echo $weatherWidget['humid_pct']; ?> %</span></p>
    <p>Cloud Cover: <span class="other-info"><?php echo $weatherWidget['cloudtotal_pct']; ?> %</span></p>
    <p>Wind Speed: <span class="other-info"><?php echo round($weatherWidget['windspd_mph']); ?> mph</span></p>
    <p>Wind Direction: <span class="other-info"><?php echo $weatherWidget['winddir_compass']; ?></span></p>
    <p>Visibility: <span class="other-info"><?php echo $weatherWidget['vis_mi']; ?> Miles</span></p>

</span>
</div>


