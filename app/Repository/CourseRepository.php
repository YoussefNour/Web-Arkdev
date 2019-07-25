<?php
require_once(__DIR__."/../Models/Course.php");
require_once (__DIR__."/../Lib/DBConnection.php");

class CourseRepository
{
    protected $table = 'course';

    public function create($data): bool
    {
        $success = false;

        try {
            $db = DBConnection::connect();
            $stmt = $db->prepare("INSERT INTO this->table (name, description, track_id) VALUES (:fname,:description,:track_id)");
            $stmt->bindValue(':fname',$data['name']);
            $stmt->bindValue(':description',$data['description']);
            $stmt->bindValue(':track_id',$data['track_id']);

            $success = $stmt->execute();

        }
        catch (PDOException $e){
            echo $e->getMessage();
            exit();
    }
    return $success;
    }

    public function deleteById($id): bool
    {
        $success = false;
        try{
            $db = DBConnection::connect();
            $stmt = $db->prepare("DELETE FROM this->table WHERE id = :id");
            $success = $stmt->execute();
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }
        return $success;
    }

    public function update($course): bool
    {
        $success = false;
        try {
            $db = DBConnection::connect();
            $stmt = $db->prepare("UPDATE $this->table set name=:name, description=:description, image_path=:image_path, track_id=:track_id where id = :id");
            $stmt->bindValue(':name', $course->getName());
            $stmt->bindValue(':description', $course->getDescription());
            $stmt->bindValue(':image_path', $course->getImagePath());
            $stmt->bindValue(':track_id', $course->getTrackId());
            $stmt->bindValue(':id', $course->getID());
            $success = $stmt->fetch();
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }

        return $success;
    }

    /**
     * @return string
     */
    public function updateImagePath($filePath, $data): bool
    {
        $success = false;
        try {
            $db = DBConnection::connect();
            $stmt = $db->prepare("UPDATE $this->table set image_path=:image_path where name = :anme, decription = :description, tracj_id = : track_id");
            $stmt->bindValue(':name', $data['name']);
            $stmt->bindValue(':description', $data['description']);
            $stmt->bindValue(':track_id', $data['track_id']);
        }catch (PDOException $e){
            echo $e->getMessage();
        }
        return $success;
    }

}