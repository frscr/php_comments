<?php


namespace Entity;


abstract class Comment
{
    private $id;
    private $guest_name;
    private $date_publication;
    private $comment;

    function setId(int $id) {
        if(is_int($id)){
            $this->id = $id;
        }

    }

    function getId(): int {
       return $this->id;
    }

    function setGuestName(string $name) {
        $this->guest_name = htmlentities($name);
    }

    function getGuestName(): string {
        return $this->guest_name;
    }

    function setDatePublication($date) {
       $this->date_publication = $date;
    }

    function getDatePuclication(): string {
        return $this->date_publication;
    }

    function setComment(string $text) {
        $this->comment = htmlentities($text);
    }

    function getComment() :string {
        return $this->comment;
    }
}