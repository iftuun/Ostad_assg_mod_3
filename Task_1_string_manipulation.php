<?php
// Online PHP compiler to run PHP program online
// Print "Hello World!" message


function manipulateString($text) {

    $text = strtolower($text);


    $text = str_replace("brown", "red", $text);


    echo $text;
}


$text = "The quick brown fox jumps over the lazy dog.";


manipulateString($text);



?>
