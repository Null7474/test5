<?php

if (!isset($_GET['id']) || empty($_GET['id'])) {
    exit;
}

if (isset($_POST['btnDel'])) {
    if (file_exists('uploads/' . $post->photo)) {
        if ($post->photo != 'default.jpg') {
            unlink('uploads/' . $post->photo);
        }
        $postData->delete($_GET['id']);
    }
    header("Location: /");
    exit;
}

require_once "../../views/posts/deletePost.view.php";
