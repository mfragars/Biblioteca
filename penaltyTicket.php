<?php
    class PenaltyTicket {
        public $idTck;
        public $idUser;
        public $idLen;
        public $ticketOpenDate;
        public $ticketCloseDate;
        public $ticketStatus;
        public $ticketValue;

        function __contruct($idTck, $idUser, $idLen, $ticketOpenDate, $ticketCloseDate, $ticketStatus, $ticketValue){
            $this-> idTck = $idTck;
            $this-> idUser = $idUser;
            $this-> idLen = $idLen;
            $this-> ticketOpenDate = $ticketOpenDate;
            $this-> ticketCloseDate = $ticketCloseDate;
            $this-> ticketStatus = $ticketStatus;
            $this-> ticketValue = $ticketValue;
        }
    }