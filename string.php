<?php
   $strings = ["Hello", "World", "PHP", "Programming"];
   $vowelCount = 0;

   for ($i = 0; $i < count($strings); $i++) {
        for($j = 0; $j <strlen($strings[$i]); $j++ ){
            // echo $strings[$i][$j] ."\n";
            if (in_array(strtolower($strings[$i][$j]), ["a", "e", "i", "o", "u"])) {
                $vowelCount++;
            }
            
        }
        echo "Original String: ".$strings[$i].", ". "Vowel Count: "  . $vowelCount.", " ."Reversed String: " .strrev($strings[$i]). "\n";
        $vowelCount =0;
    }
   
?>
