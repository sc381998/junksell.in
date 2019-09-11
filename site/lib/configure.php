<?php

$website = "http://pc1:8080";


include('classFile.php');


$img_allowed = array(".jpg", ".jpeg", ".gif", ".png");
$file_allowed = array(".doc", ".pdf");
$allowed_size = 512000;

$contact_array = array('');
$email_array = array('');

$menuarray = array(
    'index' => array(
        'name' => 'Home',
        'title' => 'Junk Sell',
        'meta_key' => '',
        'meta_des' => ''
    ),
    'about' => array(
        'name' => 'About',
        'title' => 'About | Junk Sell',
        'meta_key' => '',
        'meta_des' => ''
    ),
    'price_list' => array(
        'name' => 'Price List',
        'title' => 'Price List | Junk Sell',
        'meta_key' => '',
        'meta_des' => ''
    ),
    'contact' => array(
        'name' => 'Contact',
        'title' => 'Contact | Junk Sell',
        'meta_key' => '',
        'meta_des' => ''
    )
);


