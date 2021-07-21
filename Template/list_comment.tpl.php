<div class="list_comments">
    <h1>Комментарии</h1>
<?php foreach ($list_comments as $comment) {
    echo '<b>'.$comment['guest_name'].'</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$comment['date_publication'].'<br>';
    echo $comment['comment'].'<br><br>';
} ?>
</div>