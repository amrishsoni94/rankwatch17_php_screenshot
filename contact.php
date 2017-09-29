<?php
$url='https://www.google.co.in/?gfe_rd=cr&dcr=0&ei=LevMWeiJC9aDiAP_joGgAQ';
$parse=parse_url($url);
echo $parse ['host'];
?>