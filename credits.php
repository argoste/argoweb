
<?php
require("common-functions.php");
$author = "Stefano Carlesso";
$en_title = "External resources used in this site";
$it_title = "Materiale non prodotto da me utilizzato in questo sito";
$en_content = <<< EN_CONTENT
    <h1>Credits</h1>
    <ol>
    <li>Some PHP code for multilingual support from
      <a href="http://www.bitrepository.com/php-how-to-add-multi-language-support-to-a-website.html">
        one of Gabriel Livan's tutorial</a>.</li>
    <li>All people who created Free Open Source Software for let me using it, and also teaching me in many ways.</li>
    <li>Many sources of knowledge and inspiration will be listed in a short essay.</li>
    </ol>
EN_CONTENT;
$it_content = $en_content;
require_once("template.php");
?>
