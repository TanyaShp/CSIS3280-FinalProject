<?php

class Validate{

    // Please use filter to validate the inputs whenever possible
    // Please also sanitize the inputs.    

    // Up to you how to create the function(s) to validate the inputs    
    function validateForm()    {
        $errors_array  = array();

    // What to validate?
    
    // Email should be email format
    if(empty($_POST['email'])){
        $errors_array[] = "Please enter a valid email address";
    }
    // password
        // let's have a 6 digits string as password
        // both password and password confirm needs to be the same
    if(empty($_POST['password']) || empty($_POST['passwordConfirm'] )){
        $errors_array[] = "Please enter a password";
    }
    if($_POST['password'] && $_POST['passwordConfirm'] ){
        if($_POST['password'] != $_POST['passwordConfirm']){
            $errors_array[] = "Password does not match, please re-enter!";
        }

        if(strlen($_POST['password']) < 6){
            $errors_array[] = "Password should have atleast 6 characters!";
        }
    }
    // Full Name and Student Name should not be empty and cannot be numbers
        // Also replace occurences of semicolon, colon, comma, ampersand, 
        // dollar sign, < and > and any improper character with nothing
        // The avatar name can be in two words max.
    if(empty($_POST['fullname']) || empty($_POST['username']) || is_numeric($_POST['fullname']) || is_numeric($_POST['username'])){
        $errors_array[] = "Please enter a valid name";
    }
    if($_POST['fullname'] && $_POST['username'] ){ 
        if(str_word_count($_POST['username']) > 2){
            $errors_array[] = "Name can only be two words max!";
        }
    }
    // Height must be in number between 50 to 300    

    // One of the eye color must be chosen. The first option is not a valid entry

    // One of the alligment must be chosen. The first option is not a valid entry
        return $errors_array;
    }

}

?>