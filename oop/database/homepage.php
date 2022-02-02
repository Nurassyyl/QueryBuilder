<?php

// var_dump("Hello world");

$db = include "../database/start.php";
$posts = $db->read('posts');
include "../index.view.php";