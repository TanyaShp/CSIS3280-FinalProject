<?php

class StudentDAO   {

    // Create a member to store the PDO agent
    private static $_db;

    // create the init function to start the PDO agent
    static function init()  {
        //Initialize the internal PDO Agent
        self::$_db = new PDOService('Student');
    }
    
    // function to create student
    static function createStudent(Student $student){
        // make sure the strings being stored in the database are cleaned 
        // trimmed, and changed to lowercase

        $sql="INSERT INTO Student (username, studentid,password,email,full_name,major,photo)
        VALUES (:username, :studentid,:password,:email,:full_name,:major,:photo);";

        // query
        // bind
        // execute

        self::$_db->query($sql);
        self::$_db->bind(":username",$student->getUserName());
        self::$_db->bind(":studentid",$student->getStudentID());
        self::$_db->bind(":password",$student->getPassword());
        self::$_db->bind(":email",$student->getEmail());
        self::$_db->bind(":full_name",$student->getFullName());
        self::$_db->bind(":major",$student->getMajor());
        self::$_db->bind(":photo",$student->getPhoto());
        self::$_db->execute();
        // you may return the rowCount
        return self::$_db->rowCount();

    }

    static function getStudentUsernames(string $username){
        // make sure the strings being stored in the database are cleaned 
        // trimmed, and changed to lowercase

        $sql = "SELECT username FROM Student
        where username = :username;";

        //QUERY!!
        self::$_db->query($sql);
        //BIND
        self::$_db->bind(":username",$username);
        //EXECUTE!!
        self::$_db->execute();
        //RETURN
        return self::$_db->singleResult();

    }

    // get the student detail
    static function getStudent(string  $username)  {
        // you know the drill
        $sql = "SELECT * FROM Student
        where username = :username;";

        //QUERY!!
        self::$_db->query($sql);
        //BIND
        self::$_db->bind(":username",$username);
        //EXECUTE!!
        self::$_db->execute();
        //RETURN
        return self::$_db->singleResult();

    }

    // get multiple students detail
    // It is not needed in our app, but hey.. more practice is better!
    static function getStudents()  {
        //you know the drill
        $sql = "SELECT * FROM Student;";

        //QUERY!!
        self::$_db->query($sql);
        //BIND BUT THERE ARE NONE
        //EXECUTE!!
        self::$_db->execute();
        //RETURN
        return self::$_db->resultSet();
    }


     // UPDATE means update    
     static function updateStudent (Student $StudentToUpdate) {

        //QUERY, BIND, EXECUTE
        //Return the rowCount
        $sql = "UPDATE Student
        SET username = :username, studentid = :studentid, password = :password, email = :email, full_name = :full_name,
        major = :major, photo = :photo
        WHERE username = :username;";

        self::$_db->query($sql);

        self::$_db->bind(":username", $StudentToUpdate->getUserName());
        self::$_db->bind(":studentid", $StudentToUpdate->getStudentID());
        self::$_db->bind(":password", $StudentToUpdate->getPassword());
        self::$_db->bind(":email", $StudentToUpdate->getEmail());
        self::$_db->bind(":full_name", $StudentToUpdate->getFullName());
        self::$_db->bind(":major", $StudentToUpdate->getMajor());
        self::$_db->bind(":photo", $StudentToUpdate->getPhoto());

        self::$_db->execute();

        return self::$_db->rowCount();
    }
    
    // DELETE
    static function deleteStudent(int $username) {

        // Yea...yea... it is a drill like the one before        
        $sql = "DELETE FROM Student WHERE username = :username;";

        self::$_db->query($sql);

        self::$_db->bind(":username", $username);

        self::$_db->execute();

        return self::$_db->rowCount();
    }
    
    
}