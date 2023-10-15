<?php
    function greet($name, $color){
        echo "<p>Hi, my name is $name and my favourite color is $color</p>";
    }

    greet('John','red');
    greet('Jane','yellow');
?>

<h1><?php bloginfo('name') ?></h1>
<p><?php bloginfo('description') ?></p>

<?php

    $names = array('Salvo','Giovanni', 'Paola','Mattia');

    $count = 0;

    while($count < sizeof($names)){
        echo "<li> Hi, my name is $names[$count] </li>";
        $count++;
    }

?>

