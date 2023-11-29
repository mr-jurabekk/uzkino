<?php
require_once 'menu.php';
require_once 'social_links.php';
require_once 'slider.php';
require_once 'movie.php';
require_once 'news.php';
require_once 'user.php';

function addSeenCount($tableName, $id, $rowName = 'seen_count'){
    global $db;
    $query = "SELECT `$rowName` FROM `$tableName` WHERE `id` = '$id'";
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));
    $count = mysqli_fetch_assoc($result)[$rowName];
    $count += rand(1, DEFAULT_SEEN_COUNT);

    $query = "UPDATE `$tableName` SET `$rowName` = '$count' WHERE `id` = '$id'";
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));
    return true;

}

function updateImageName($tableName, $modelId, $imageName, $rowName ){
    global $db;
    $query = "UPDATE `$tableName` SET `$rowName`='$imageName' WHERE `id` = '$modelId'";
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));
    return true;
}

function getRowsCount($tableName){
    global $db;
    $query = "SELECT COUNT(`id`) AS count FROM `$tableName`";
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));
    $arr = mysqli_fetch_assoc($result);
    if ($arr){
        return $arr['count'];
    }else{
        return 0;
    }
}