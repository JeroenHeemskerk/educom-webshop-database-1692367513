<?php
include_once "users.repository.php";
include_once "sessions.php";
function AuthorizeUser($email, $password){
    $user = FindUserByEmail($email);
    if(empty($user)){
        return null;
    }
    if($password != $user['password']){
        return "error";
    }
    return $user;
}
function DoesEmailExist($email){
    $user = FindUserByEmail($email);
    return !empty($user);
}
function StoreUser($email, $name, $password, $databaseErr){
    SaveUser($email, $name, $password, $databaseErr);
}
function UpdatePassword($password){
    $email = getLogInEmail();
    UpdateUser($password, $email);
}
function TestInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }