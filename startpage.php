<?php

// require once all the files
require_once("inc/config.inc.php");
require_once("inc/Entity/Student.class.php");
require_once("inc/Entity/Page.class.php");
require_once("inc/Utility/StudentDAO.class.php");
require_once("inc/Utility/PDOService.class.php");
require_once("inc/Utility/LoginManager.class.php");
require_once("inc/Utility/Validate.class.php");


//Start the session
session_start();

if (!empty($_POST)) {
if($_POST["action"] == "signout"){

    $test = $_SESSION['user'];
    header('Location: http://' . $_SERVER['HTTP_HOST']. dirname($_SERVER['PHP_SELF']) .'/logout.php');

}
if($_POST["action"] == "edit"){

    $test = $_SESSION['user'];
    header('Location: http://' . $_SERVER['HTTP_HOST']. dirname($_SERVER['PHP_SELF']) .'/profile.php');

}
}

//Verify the Login
LoginManager::verifyLogin();

    //Initialize the avatar DAO
    StudentDAO::init();

    //Get the current Avatar thats logged in
    $currentStudent = $_SESSION['user'];

    //Display page' element corresponding to the avatar details
    
    Page::header();
    Page::displayStudentDetails($currentStudent);
    Page::footer();




?>