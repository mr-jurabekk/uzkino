<?php
function login($login, $password){
    global $db;

    $password = md5($password);
    $query = "SELECT * FROM `user` WHERE `username` = '$login' AND `password` = '$password'";
    $result = @mysqli_query($db, $query) or die($db);
    $user = mysqli_fetch_assoc($result);

    if (!empty($user)){
        $_SESSION['user'] = $user;
        return true;
    }else{
            return false;
        }
}

function getAllUsers(){
    global $db;
    $query = "SELECT * FROM `user`";
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function newUser($username, $password, $status) {
    global $db;
    $password = md5($password);
    $query = "INSERT INTO `user`(`username`, `password`, `status`) VALUES ('$username', '$password', '$status')";
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));
    if (mysqli_affected_rows($db) > 0){
        return mysqli_insert_id($db);
    }
}
function deleteUser($id){
    global $db;
    $query = "DELETE FROM `user` WHERE `id` = '$id'";
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));
    return true;
}
