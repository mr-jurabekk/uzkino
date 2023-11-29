<?php

function getAllMenuItems($position = HEADER_MENU_POSITION, $parent = 0){
    global $db;
    $query = "SELECT * FROM `menu` WHERE `status` = 1 and `position` = $position AND `parent` = $parent ORDER BY  `order_by` ASC";
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}


##########  BACKEND FUNCTION    #######

function getAllMenu(){
    global $db;
    $query = "SELECT * FROM `menu`";
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function newMenu( $title, $link, $position, $order, $parent, $status){
    global $db;
    $query = "INSERT INTO `menu`(`title`, `link`, `position`, `order_by`, `parent`, `status`) VALUES ('$title', '$link', '$position', '$order', '$parent', '$status')";
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));
    if (mysqli_affected_rows($db) > 0){
        return true;
    }else{
        return false;
    }
}

function getParentMenus($position = HEADER_MENU_POSITION){
    global $db;
    $query = "SELECT * FROM `menu` WHERE `position` = '$position' AND `parent` = 0";
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function showMenu($id){
    global $db;
    $query = "SELECT * FROM `menu` WHERE `id` = '$id'";
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));
    return mysqli_fetch_assoc($result);

}
function editMenu($id, $title, $link, $position, $order, $parent, $status){
    global $db;
    $query = "UPDATE `menu` SET `title`='$title',`link`='$link',`position`='$position',`order_by`='$order',`parent`='$parent',`status`='$status' WHERE `id` = '$id'";
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));
    return true;

}
function deleteMenu($id){
    global $db;
    $query = "DELETE FROM `menu` WHERE `id` = '$id'";
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));
    if (mysqli_affected_rows($db) > 0){
    return true;
    }else{
        return false;
    }
}