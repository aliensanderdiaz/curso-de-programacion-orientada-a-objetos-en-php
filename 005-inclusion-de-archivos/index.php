<?php

# warning si no encuentra el archivo
# fatal error si se incluye 2 veces el mismo archivo
// include 'greet.php';
// include 'greet.php';

# fatal error si no encuentra el archivo
# fatal error si se incluye 2 veces el mismo archivo
// require 'greet.php';
// require 'greet.php';

# fatal error si no encuentra el archivo
# no pasa nada si se incluye 2 veces el mismo archivo
require_once 'greet.php';
// require_once 'greet.php';

echo greet('Alex', 'Cómo estas?');