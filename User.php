<?php
    class User {
        public $idUser;
        public $userName;
        public $userPassword;
        public $email;
        public $userStatus;
        public $userType;
        public $createDate;

        function __construct($idUser, $userName, $userPassword, $email, $userStatus, $userType, $createDate){
            $this->idUser = $idUser;
            $this->userName = $userName;
            $this->userPassword = $userPassword;
            $this->email = $email;
            $this->userStatus = $userStatus;
            $this->userType = $userType;
            $this->createDate = $createDate;
        }
    }