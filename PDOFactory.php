<?php
    class PDOFactory {
        private static $pdo;

        public static function getConnection() {
            if(!isset($pdo)){
                $connection = "mysql:host=localhost;dbname=library";
                $userDb = "dev";
                $passDb = "devpass";

                $pdo = new PDO($connection, $userDb, $passDb);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $pdo->setAttribute(PDO::ATTR_DEFAULT_FECTH_MOTE, PDO::FETCH_ASSOC);
                $pdo->setAttribute(PDO::ATTR_STRINGIFY_FETCH,false);
                $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            }
            return $pdo;
        }
    }