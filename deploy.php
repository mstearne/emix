<?php
/**
 * Created by PhpStorm.
 * User: blaze
 * Date: 3/10/16
 * Time: 12:28 PM
 */

print_r($_REQUEST);

file_put_contents("log.txt",print_r($_REQUEST,true));

?>
