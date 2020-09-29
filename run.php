<?php
// github.com/pajaar

$lol = json_decode(file_get_contents("https://api.quotable.io/random"));
echo $lol->content." -".$lol->author;
?>
