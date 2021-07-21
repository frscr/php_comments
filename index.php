<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require ("config.php");

require ("Component/Render.php");
require ("Entity/Comment.php");
require ("Model/ModelComment.php");
require ("Controller/AddComment.php");
require ("Controller/ShowComment.php");


use Controller\AddComment;
use Controller\ShowComment;
use Component\Render;

$render = new Render();

if(isset($_POST['btn_add_comment'])) {
    $new_comment = new AddComment();
    $new_comment->index($_POST['name_guest'], $_POST['comment']);
    $new_comment = null;
}

$comments = new ShowComment();
$list_comments = $comments->index();

$form_add_comment = $render->render('form_add_comment');
$render->add_vars(['form_add_comment'=>$form_add_comment, 'list_comments'=>$list_comments]);
echo $render->render('base');
?>