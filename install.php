<?php
include ("config.php");

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

    function install() {
        $pdo = connect();

        $sql = $pdo->query("create table tbl_comments
                                        (
                                            id int not null auto_increment,
                                            guest_name varchar(255) not null,
                                            date_publication datetime not null,
                                            comment text not null,
                                            primary key (id)
                                        );");
        $sql->execute();
        $sql = null;
    }
    install();