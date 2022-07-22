<?php

    require_once('../inc/config.inc.php');
    require_once('../views/component/footer.page.php');
    require_once('../views/component/header.page.php');
    require_once('../views/Register.page.php');
    require_once('../inc/Utilities/PDOService.php');
    require_once('../inc/Utilities/UsersDAO.class.php');
    require_once('../models/Users.class.php');

   
    UsersDAO::initialize(USERS);

    if(!empty($_POST) && isset($_POST))
    {
        $existingUser = UsersDAO::getUser($_POST['email']);
        if (!empty($existingUser)) 
        {
            echo "Already exists !!!";
            PageHeader::header();
            PageRegister::register();
        } 
        else
        {
            $user = new Users();
            $user->setFname($_POST['fname']);
            $user->setLname($_POST['lname']);
            $user->setEmail($_POST['email']);
            $user->setPhone($_POST['phone']);
            $user->setPassword(password_hash($_POST['password'], PASSWORD_DEFAULT));
            $user->setAgreement($_POST['agreement']);
            $user->setRole();
            
            $res = UsersDAO::createUser($user);

            if($res > 0)
            {
                header(LOCATION_LOGIN);
                exit;
            }
        }

    }
    else{
        PageHeader::header();
        PageRegister::register();
        
    }

