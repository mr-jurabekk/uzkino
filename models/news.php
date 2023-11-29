<?php
function getAllNews(){
    global $db;

    $query = "SELECT * FROM `news` WHERE `status` = 1";

    $result = @mysqli_query($db, $query) or die(mysqli_error($db));

    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}
function getAllNewsCategories(){
    global $db;

    $query = "SELECT * FROM `news_category` WHERE `status` = 1";

    $result = @mysqli_query($db, $query) or die(mysqli_error($db));

    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}
function getNewsCategory($id){
    global $db;

    $query = "SELECT * FROM `news` WHERE `status` = 1 AND `category_id` = $id";

    $result = @mysqli_query($db, $query) or die(mysqli_error($db));

    return mysqli_fetch_assoc($result);
}
function getNewsId($id){
    global $db;

    $query = "SELECT * FROM `news` WHERE `status` = 1 AND `id` = $id";

    $result = @mysqli_query($db, $query) or die(mysqli_error($db));

    return mysqli_fetch_assoc($result);
}