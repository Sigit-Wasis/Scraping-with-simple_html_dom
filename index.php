<?php

//panggil library simple dom parser
require('simple_html_dom.php');
 
// Url yang akan kita ambil text/content nya
$html = file_get_html('example.com');
 
//elemet text yang mau kita ambil
$data = $html->find('');

// kita looping hasilnya
foreach ($data as $key => $value) {
//fungsi plaintext : mengambil text 
$data = $value->plaintext;

echo $data."<br>";

}
?>