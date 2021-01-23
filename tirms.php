<?php

namespace Datacleaner;
// trims clases que comparten codigo
class Clean {
    function filterTitle($text) {
        // Trim white space and capitalize first word
        return ucfirst(trim($text));
    }
}

class Clean {
   function removeProfanity($text) {
       $badwords = array(
        "idiotic" => "shortsighted",
        "moronic" => "unreasonable",
        "insane" => "illogical");
            return strtr($text,$badwords);
       
   } 


 }


?>