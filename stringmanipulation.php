<?php

$title = " String Manipulation ";

include 'includes/header.php'


?>

<h1> <?php echo $title ?> </h1>

<?php

     $phase1 = " Student who came late ";
     $phase2 = " In class stand with Rock ";
     $name = " Anniecia Bell ";

     echo $phase1 . ", name Shenaid, " . $phase2;
     echo '<br/>';
     echo '<hr>';

     echo 'Uppercase First Letter: ' . ucfirst ($name). '<br/>';
     echo 'Uppercase First Letter of each word: ' . ucwords ($name). '<br/>';
     echo 'Upper case : ' . strtoupper ($name). '<br/>';
     echo 'Lower case : ' . strtolower (" THIS WAS ALL UPPER CASE "). '<br/>';
     echo '<hr/>';
     echo 'Repeat String : ' . str_repeat ('a', 10). '<br/>';
     echo 'Repeat String - Nested Function : ' . strtoupper (str_repeat ('a', 10)).
     '<br/>';

     echo 'Get a Substring : ' . substr (name. 3, 5). '<br/>';

     echo 'Get position of string : ' . strpos ($name, 't'). '<br/>';
     
     echo 'Find Character "R" : ' . strchr ($name, 'R'). '<br/>';
     echo 'Find Character "r" : ' . strchr ($name, 'r'). '<br/>';
     echo 'Find Character "s" : ' . strchr ($name, 's'). '<br/>';
     echo 'Find Character "e" : ' . strchr ($name, 'e'). '<br/>';

     echo 'Find Length of String : ' . strlen ($name). '<br/>';

     echo 'Without Trim : '. "A". " B C D " . "E" . '<br/>';
     echo 'Trim Spaces on both sides : '. "A". trim (" B C D ") . "E" . '<br/';
     echo 'Trim Spaces to the left : '. "A". ltrim (" B C D ") . "E" . '<br/>';
     echo 'Trim Spaces to the right : '. "A". rtrim (" B C D ") . "E" . '<br/>';

     echo 'Replace string with another : '. str_replace ("stand", "sit", $phase2 )
     . '<br/>';


     ?>

<?php require 'includes/footer.php' ?>