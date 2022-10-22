<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i %  5 == 0  &&  $i %  3 == 0) {
        echo "Hello World";
        echo "<br>";
    } elseif ($i %  3 == 0) {
        echo "Hello";
        echo "<br>";
    } elseif ($i %  5 == 0) {
        echo "World";
        echo "<br>";
    } else {
        echo $i;
        echo "<br>";
    }
}
