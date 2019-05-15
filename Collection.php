<?php
    class Collection {
        public $idCol;
        public $title;
        public $author;
        public $publication;
        public $status;
        public $subject;

        function __construct($idCol, $title, $author, $publication, $status, $subject){
            $this->idCol = $idCol;
            $this->title = $title;
            $this->puplication = $publication;
            $this->status = $tatus;
            $this->subject = $subject;
        }
    }