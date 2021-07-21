<?php


namespace Model;


use Entity\Comment;

class ModelComment extends Comment
{
    function connect() {
        $constant = 'constant';
        $charset = 'utf8';
        $dsn = "mysql:host={$constant('HOST')};dbname={$constant('DBNAME')};charset=$charset";
        try {
            $pdo = new \PDO($dsn, USER, PASS);
        } catch (\PDOException $e) {
            die("Connect error".$e->getMessage());
        }
        return $pdo;
    }

    function addComment() {
        $pdo = $this->connect();
        $sql = $pdo->prepare("INSERT INTO tbl_comments(guest_name, date_publication, comment) VALUES (:guest_name, :date_publication, :comment)");
        $sql->bindValue(':guest_name', $this->getGuestName());
        $sql->bindValue(':date_publication', $this->getDatePuclication());
        $sql->bindValue(':comment', $this->getComment());
        $sql->execute();
        $sql = null;
    }

    function showComments() {
        $comments = [];
        $pdo = $this->connect();
        $sql = $pdo->query("SELECT * FROM tbl_comments");
        $sql->execute();
        foreach ($sql as $row) {
            $comments[] = ['id'=>$row['id'], 'guest_name'=>$row['guest_name'],
                           'date_publication' => $row['date_publication'], 'comment'=>$row['comment']];
        }
        return $comments;
    }
}