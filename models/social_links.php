<?php

function getAllSocialItems(){
    global $db;
    $query = "SELECT * FROM `social_links` WHERE `status` = 1  ORDER BY  `order_by` ASC";
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}
function getAllSocial(){
    global $db;
    $query = "SELECT * FROM `social_links` ORDER BY  `order_by` ASC";
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function showSocial($id){
    global $db;
    $query = "SELECT * FROM `social_links` WHERE `id` = '$id'";
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));
    return mysqli_fetch_assoc($result);
}

function newSocial($class, $link, $order, $status){
    global $db;
    $query = "INSERT INTO `social_links`(`class`, `link`, `order_by`, `status`) VALUES ('$class', '$link', '$order', '$status')";
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));
    if (mysqli_affected_rows($db) > 0){
        return true;
    }else{
        return false;
    }
}
function addSocial($id, $class, $link, $order, $status){
    global $db;
    $query = "UPDATE `social_links` SET `class`='$class',`link`='$link',`order_by`='$order',`status`='$status' WHERE `id` = '$id'";
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));
    return true;
}
function deleteSocial($id){
    global $db;
    $query = "DELETE FROM `social_links` WHERE `id` = '$id'";
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));
    if (mysqli_affected_rows($db) > 0){
        return true;
    }else{
        return false;
    }
}
