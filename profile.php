<?php

// require once all the file
require_once("inc/config.inc.php");
require_once("inc/Entity/Student.class.php");
require_once("inc/Entity/Page.class.php");
require_once("inc/Utility/StudentDAO.class.php");
require_once("inc/Utility/PDOService.class.php");
require_once("inc/Utility/LoginManager.class.php");
require_once("inc/Utility/Validate.class.php");

session_start();
LoginManager::verifyLogin();
$currentStudent = $_SESSION['user'];

Page::header();
StudentDAO::init();

//Check if the form was posted
if (!empty($_POST)) {
    $errors = new Validate();

    // If the form entries are valid
    if(empty($errors->validateForm())){
        // initialize the DAO

        // instantiate a new currentStudent
        $tempStudent = new Student();

        //$storedHash = password_hash($_POST["password"], PASSWORD_DEFAULT);

        // assemble the avatar data
        $tempStudent->setFullName($_POST["fullname"]);
        $tempStudent->setUserName($_POST["username"]);
        $tempStudent->setStudentID($_POST["studentid"]);
        $tempStudent->setEmail(strtolower($_POST["email"]));
        $tempStudent->setMajor($_POST["major"]);
        $tempStudent->setPhoto($_POST["photo"]);
        $tempStudent->setPassword($_POST["password"]);

        $currentStudent = $tempStudent;

        // create the avatar
        StudentDAO::updateStudent($tempStudent);

        // send the user to the login page
        header('Location: http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) .'/startpage.php');
    }else{
    // Else
        // display error message
        $errors = $errors->validateForm();
        Page::displayErrors($errors);
    }

} 
$currentstudentdata = StudentDAO::getStudent($currentStudent->getUserName());

// Display the page elements and registration form
Page::displayEditForm($currentstudentdata);
Page::footer();
?>