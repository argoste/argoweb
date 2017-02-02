<?php
/*
Functions To make a multi-language site
Code by Gabriel Livan
http://www.bitrepository.com/php-how-to-add-multi-language-support-to-a-website.html
*/
session_start();
header('Cache-control: private'); // IE 6 FIX
if(isSet($_GET['lang'])) {
  $lang = $_GET['lang'];
  $_SESSION['lang'] = $lang;   // register the session
  setcookie("lang", $lang, time() + (3600 * 24 * 30)); // and set the cookie
}
else if(isSet($_SESSION['lang'])) {
  $lang = $_SESSION['lang'];
}
else if(isSet($_COOKIE['lang'])) {
  $lang = $_COOKIE['lang'];
}
else {
  $lang = 'en';
}
# This code is by Stefano Carlesso
function enit($en_version, $it_version) {
  global $lang;
  switch ($lang) {
    case en: {
      echo $en_version;
      break;
    }
    case it: {
      echo $it_version;
      break;
    }
  }
}
