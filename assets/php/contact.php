<?php 
//Helper Function 
function _e($string){
    return htmlentities($string, ENT_QUOTES, 'UTF-8', false);
}

$whitelist = array('name', 'email', 'message');

$emailaddress='shop.poe00@gmail.com';

$subject= 'New Contact Form Submission';

$errors=array();
$field=array();

if(! empty($_POST)){

if(intval($_POST ['email'])&& : ! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

    $errors[] = "Please Enter a Valid Email Address"
};

};