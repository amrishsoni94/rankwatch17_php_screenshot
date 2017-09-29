<?php
$siteURL ='https://www.goole.com ';
// caLL google PageSpeed Insights API
$googlePagespeedData=file_get_contents("https://www.googleapis.com/pagespeedonline/v2/runPagespeed?url=$siteURL&screenshot=true");

//decode json data
$googlePagespeedData= json_decode($googlePagespeedData, true);
//screenshot data
$screenshot= $googlePagespeedData['screenshot']['data'];
$screenshot=str_replace(array('_','_'), array('/','+'), $screenshot);
//display screenshot
echo'<img src="data:image/jpeg:base64,'.$screenshot.'"/>';

?>