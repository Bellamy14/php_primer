<?php 

$title = "Index";

include 'includes/header.php'

?>

<h1> Hello HTML - PHP Primer </h1>

<br/>

<?php 
     echo 'HELLO PHP!';
     echo '<br/>';
     echo 'Second Line';
     echo '<br/>';

?>


<?php 

     $name = 'Anniecia Bell';
     $age = 29;

    echo $name;
    echo '<h1> My Name is :' .$name. '</h1>';
    echo '<h1> My Age is :' .$age. '</h1>';


?>


<button type = "button" class = "btn btn-dark"> Click Me! </button>
<button type = "button" class = "btn btn-primary"> Click Me! </button>
<button type = "button" class = "btn btn-success"> Click Me! </button>


<a href = "https://www.heroku.com" target = "_blank" class = "btn btn-danger"> Heroku.com </a>


<?php require 'includes/footer.php'?>