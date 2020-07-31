<?php
require_once("inc/config.inc.php");
require_once("inc/Entity/Student.class.php");
require_once("inc/Entity/Page.class.php");
require_once("inc/Utility/StudentDAO.class.php");
require_once("inc/Utility/PDOService.class.php");
require_once("inc/Utility/LoginManager.class.php");
require_once("inc/Utility/Validate.class.php");


// Initialize the session
session_start();

unset($_SESSION['user']);

session_destroy();

Page::header();
Page::thankYou();
Page::footer();

header( "refresh:4; url=login.php" ); 

?>
