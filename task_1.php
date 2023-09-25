<?php 
     $text = "The quick brown fox jumps over the lazy dog.";
    function text($text){
       
        $stringToLower = strtolower($text)."<br>";
        $stringReplace = str_replace("brown", "red", $stringToLower);
        echo $stringReplace;
    }
    text($text);
    
    
?>