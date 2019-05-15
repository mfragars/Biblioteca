<?php
    include_once 'User.php';
    include_once 'PDOFactory.php';

    class UserDAO{
        public function insert(User $user){
            $insertQuerie = "INSERT INTO users (userName, userPassword, email, userStatus, userType, createDate) VALUE (:userName, MD5(:userPass), :email, :userStatus, :userType, :createDate)";
            $pdo = PDOFactory::getConnection();
            $command = $pdo->prepare($insertQuerie);
            $command->bindParam(":userName", $user->userName);
            $command->bindParam(":userPass", $user->userPassword);
            $command->bindParam(":email", $user->email);
            $command->bindParam(":userStatus", $user->userStatus);
            $command->bindParam(":userType", $user->userType);
            $command->bindParam(":createDate", $user->createDate);
            $commando->execute();
            $user->userId = $pdo->lastInsertId();
            return $user;
        }


    }