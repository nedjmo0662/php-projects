<?php
$obj = (object)array('name'=>'nejdmo','last'=>'nettari');
$obj1 = array('name'=>'nedjmo');

$obj->last = 'nettari';


$obj1['last'] = 'nettari';

echo '<pre>';
print_r($obj);
echo "</pre>";
print_r($obj);
echo '<pre>';
print_r($obj1);
echo "</pre>";
print_r($obj1);
