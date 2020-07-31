<?php

// require once all the files
require_once("inc/config.inc.php");
require_once("inc/Entity/Student.class.php");
require_once("inc/Entity/Page.class.php");
require_once("inc/Utility/StudentDAO.class.php");
require_once("inc/Utility/PDOService.class.php");
require_once("inc/Utility/LoginManager.class.php");
require_once("inc/Utility/Validate.class.php");


//Check if the form was posted
if (!empty($_POST)) {


    //Initialize the DAO
    StudentDAO::init();

    //Get the current avatar 
    $currentStudent = StudentDAO::getStudent($_POST['username']);

    //Check the DAO returned an object of type avatar
    if ($currentStudent!=false) {

        //Verify the password with the posted data
        if ($currentStudent->verifyPassword($_POST['password']))  {

            //Start the session
            session_start();

            //Set the user to logged in. Remember, the username is email address 
            $_SESSION['user'] = $currentStudent;

            //Use header to send the user to the avatar profile page
            header('Location: http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) .'/startpage.php');
        }
    }
}
            
// Display the page element
Page::header();
Page::displayLogin();
Page::footer();
?>