<?php


namespace Controller;

use Model\ModelComment;

class AddComment
{
    function index(string $guest_name, string $comment) {

        $today = date("Y-m-d H:i:s");

        $add_comment = new ModelComment();
        $add_comment->setGuestName($guest_name);
        $add_comment->setComment($comment);
        $add_comment->setDatePublication($today);
        $add_comment->addComment();
        $add_comment = null;
    }
}