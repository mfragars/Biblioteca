<?php
    class Lending {
        public $idLen;
        public $idCol;
        public $idUser;
        public $outDate;
        public $scheduleDelivaryDate;
        public $delivaryDate;

        function __construct($idLen, $idCol, $idUser, $outDate, $scheduleDelivaryDate, $delivaryDate){
            $this->idLen = $idLen;
            $this->idCol = $idCol;
            $this->idUser = $idUser;
            $this->outDate = $outDate;
            $this->scheduleDelivaryDate = $scheduleDelivaryDate;
            $this->delivaryDate = $delivaryDate;
        }
    }