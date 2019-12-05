<?php
function inverse($z)
{
    if (!$z) {
        throw new Exception('Division by zero.');
    }
    return 1 / $z;
}

try {
    echo inverse(5) . "\n";
    echo inverse(0) . "\n";
} catch (Exception $a) {
    echo 'Er is iets mis gegaan: ', $a->getMessage(), "\n";
}


echo "Er is iets mis gegaan";
