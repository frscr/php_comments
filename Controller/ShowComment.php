<?php


namespace Controller;

use Model\ModelComment;
use Component\Render;

class ShowComment extends Render
{
    function index() {
        $commets = new ModelComment();
        $list_comments = $commets->showComments();
        $this->add_vars(['list_comments'=>$list_comments]);
        $result = $this->render('list_comment');
        return $result;
    }
}