<?php

require('simple_html_dom.php');
// echo "ini web scrapp ";
 
// Website link to scrap
$website = 'http://embuncode.blogspot.com';
 
// Create DOM from URL or file
$html = file_get_html($website);
 
// Print webpage content  
echo $html; 

?>