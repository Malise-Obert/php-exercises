<?php

require 'Koala.php';

/**
 * Is the first slash in \Animal\Adorable\Koala necessary?
 *
 * Yes. If you choose to not have a use statement,
 * then you must always start with a \ so that PHP knows to build the namespace
 * from the root of all namespaces.
 */
$koala = new \Animal\Adorable\Koala();

?>
