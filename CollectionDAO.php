<?php
    include_once 'Collection.php';
    include_once 'PDOFactory.php';

    class CollectionDAO {
        public function insert(Collection $collection){
            $insertQuerie = "INSERT INTO collection (title, author, publication, status, subject) VALUES (:title, :author, :publication, :status, :subject)";
            $pdo = PDOFactory::getConnection();
            $command = $pdo->prepare($insertQuerie);
            $command->bindParam(":title", $collection->title);
            $command->bindParam(":author", $collection->author);
            $command->bindParam(":publication", $collection->publication);
            $command->bindParam(":status", $collection->status);
            $command->bindParam(":subject", $collection->subject);
            $command->execute();
            $collection->IdCol = $pdo->lastInsertId();
            return $collection;
        }

        public function delete($idCol){
            $deleteQuerie = "DELETE FROM collection WHERE idCol =:idCol";
            $pdo = PDOFactory::getConnection();
            $command = $pdo->prepare($deleteQuerie);
            $command->bindParam(":idCol", $idCol);
            $command->execute();
        }

        public function update(Collection $collection){
            $updateQuerie = "UPDATE collection SET title=:title, author=:author, publication=:publication, status=:status, subject=:subject";
            $pdo = PDOFactory::getConnection();
            $command = $pdo->prepare($updateQuerie);
            $command->bindParam(":title", $collection->title);
            $command->bindParam(":author", $collection->author);
            $command->bindParam(":publication", $collection->publication);
            $command->bindParam(":status", $collection->status);
            $command->bindParam(":subject", $collection->subject);
            $command->execute();
        }

        public function list(){
            $listQuerie = "SELECT * FROM collection";
            $pdo = PDOFactory::getConnection();
            $command = $pdo->prepare($listQuerie);
            $command->execute();
            $collection=array();
            while($row = $command->fetch(PDO::FETCH_OBJ)){
                $collection[] = new Collection($row->idCol, $row->title, $row->author, $row->pubication, $row->status, $row->subject);
            }
            return $collection;
        }

        public function findById($idCol){
            $querie = "SELECT * FROM collection WHERE idCol=:id";
            $pdo = PDOFactory::getConnection();
            $command = $pdo->prepare($querie);
            $command->bindParam("id", $idCol);
            $command->execute();
            $result = $command->fetch(PDO::FETCH_OBJ);
            return new Collection($result->idCol, $result->title, $result->author, $result->publication, $result->status, $result->subject);
        }

        public function findByTitle($title){
            $querie = "SELECT * FROM collection WHERE title=:title";
            $pdo = PDOFactory::getConnection();
            $command = $pdo->prepare($querie);
            $command->bindParam("title", $title);
            $command->execute();
            $result = $command->fetch(PDO::FETCH_OBJ);
            return new Collection($result->idCol, $result->title, $result->author, $result->publication, $result->status, $result->subject);
        }

        public function findByAuthor($author){
            $querie = "SELECT * FROM collection WHERE author=:author";
            $pdo = PDOFactory::getConnection();
            $command = $pdo->prepare($querie);
            $command->bindParam("author", $author);
            $command->execute();
            $result = $command->fetch(PDO::FETCH_OBJ);
            return new Collection($result->idCol, $result->title, $result->author, $result->publication, $result->status, $result->subject);
        }
    }