<?php
require_once "vendor/autoload.php";

$route = $_GET['route'];
switch($route)
{
    case '':
        require_once 'App/db/posts/index.php';
 break;

    case 'insertpost':
        require_once 'App/db/posts/insertPost.php';
 break;

    case 'deletepost':
        require_once 'App/db/posts/deletePost.php';
 break;

    case 'updatepost':
        require_once 'App/db/posts/updatePost.php';
 break;
}