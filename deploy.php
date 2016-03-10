<?php
/**
 * Created by PhpStorm.
 * User: blaze
 * Date: 3/10/16
 * Time: 12:28 PM
 */

//print_r($_POST);
print_r($_REQUEST);

file_put_contents("log.txt",print_r($_REQUEST,true));

$commit=json_decode($_REQUEST['payload']);

file_put_contents("log.txt",print_r($commit,true));

if($commit->ref=="refs/heads/master"){

    file_put_contents("log.txt","we should do a pull");
mail("mstearne@gmail.com","Git PULL happened on ".$commit->repository->name,print_r($commit,true));


    system("/usr/local/bin/git pull");

}else{
    file_put_contents("log.txt","no pull");

}
// next change
?>
