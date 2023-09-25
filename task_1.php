<?php 
     $text = "The quick brown fox jumps over the lazy dog.";
    function text($text){
       
        $stringToLower = strtolower($text)."<br>";
        $modifyText = str_replace("brown", "red", $stringToLower);
        echo $modifyText;
    }
    text($text);
    
    
?>