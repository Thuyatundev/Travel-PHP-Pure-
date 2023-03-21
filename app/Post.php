<?php

class Post
{
    private $conn;
    public function __construct($connection)
    {
        $this->conn = $connection;
    }

    public function create($title,$des,$image)
    {
        try {   
        $state = $this->conn->prepare("INSERT INTO posts(title,description,image)VALUES(:title,:description,:image)");
        $state->bindParam(':title',$title);
        $state->bindParam(':description',$des);
        $state->bindParam(':image',$image);
        $state->execute();
        return true;
        } catch (Exception $e) {
            print_r($e);
        }
    }

    public function getAll()
    {
        try {
            $state = $this->conn->prepare("SELECT * FROM posts");
            $state->execute();
            $posts = $state->fetchAll(PDO::FETCH_ASSOC);
        return $posts;     
        } catch (Exception $e) {
           print_r($e);
        } 
    }
}