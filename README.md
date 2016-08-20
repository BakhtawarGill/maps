
#put index.php at root of your project.

<?php 
include "maps/src/Maps.php";

$params = array();
$params['key'] = 'AIzaSyCVFWeeOh_43Mw4RZpbWPJVuQHmfqpWvZ8';
$params['marker'] = array('latlng' => '{lat: -25.363, lng: 131.044}', 'title' => 'Virginia');

$obj = new Maps($params);
?>
