<?php

// require once all the file
require_once("inc/config.inc.php");
require_once("inc/Entity/Student.class.php");
require_once("inc/Entity/Page.class.php");
require_once("inc/Utility/StudentDAO.class.php");
require_once("inc/Utility/PDOService.class.php");
require_once("inc/Utility/LoginManager.class.php");
require_once("inc/Utility/Validate.class.php");


Page::header();

//Check if the form was posted
if (!empty($_POST)) {
    $errors = new Validate();

    // If the form entries are valid
    if(empty($errors->validateForm())){
        // initialize the DAO
        StudentDAO::init();

        // instantiate a new avatar
        $newStudent = new Student();

        $storedHash = password_hash($_POST["password"], PASSWORD_DEFAULT);

        $usernames = array();
        $usernames = StudentDAO::getStudentUsernames($_POST["username"]);
        
        if($usernames == false){
            $newStudent->setFullName($_POST["fullname"]);
            $newStudent->setUserName($_POST["username"]);
            $newStudent->setStudentID($_POST["studentid"]);
            $newStudent->setEmail(strtolower($_POST["email"]));
            $newStudent->setMajor($_POST["major"]);
            $newStudent->setPhoto($_POST["photo"]);
            $newStudent->setPassword($storedHash);

            // create the avatar
            StudentDAO::createStudent($newStudent);

            // send the user to the login page
            header('Location: http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) .'/login.php');
        }
        if($_POST["username"] == $usernames->getUserName()){
                  $err =  $errors->validateForm();
                $err[] = "This username is already taken!";
                Page::displayErrors($err);
        }else{

        // assemble the avatar data
            $newStudent->setFullName($_POST["fullname"]);
            $newStudent->setUserName($_POST["username"]);
            $newStudent->setStudentID($_POST["studentid"]);
            $newStudent->setEmail(strtolower($_POST["email"]));
            $newStudent->setMajor($_POST["major"]);
            $newStudent->setPhoto($_POST["photo"]);
            $newStudent->setPassword($storedHash);

            // create the avatar
            StudentDAO::createStudent($newStudent);

            // send the user to the login page
            header('Location: http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) .'/login.php');
        }

    
    }else{
    // Else
        // display error message
        $errors = $errors->validateForm();
        Page::displayErrors($errors);
    }
    
} 
// Display the page elements and registration form
Page::displayRegistrationForm();
Page::footer();
?>