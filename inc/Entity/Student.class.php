<?php

class Student {
/*
studentid INT PRIMARY KEY,	
	password VARCHAR(250),
	email VARCHAR(50),
	full_name VARCHAR(50),	
	major VARCHAR(50),
    photo VARCHAR(50)
*/
    //Properties
    private $username;
    private $studentid;
    private $password;
    private $email;
    private $full_name;
    private $major;
    private $photo;


    //Setters
    public function setUserName(string $UserName){
        $this->username=$UserName;
    }
    public function setStudentID(int $StudentID){
        $this->studentid=$StudentID;
    }
    public function setFullName(string $FullName){
        $this->full_name=$FullName;
    }
    public function setEmail(string $Email){
        $this->email=$Email;
    }
    public function setPassword(string $Password){
        $this->password=$Password;
    }
    public function setMajor(string $Major){
        $this->major=$Major;
    }
    public function setPhoto(string $Photo){
        $this->photo=$Photo;
    }

    //Getters
    public function getUserName():string{
        return $this->username;
    }
    public function getStudentID():int{
        return $this->studentid;
    }
    public function getFullName():string{
        return $this->full_name;
    }
    public function getEmail():string{
        return $this->email;
    }
    public function getPassword():string{
        return $this->password;
    }
    public function getMajor():string{
        return $this->major;
    }
    public function getPhoto():string{
        return $this->photo;
    }


    //Verify the password
    function verifyPassword(string $passwordToVerify) {
        //Return a boolean based on verifying if the password given is correct for the current user
        return password_verify($passwordToVerify,$this->getPassword());     
    }
}



?>