<?php

function debug($arr){
    echo "<pre>";
        print_r($arr);
    echo "</pre>";
}

function getImage($tableName, $modelId, $image){
    $dir = __DIR__ . "/uploads/{$tableName}/{$modelId}/{$image}";

    if (is_file($dir)){
        return "/uploads/{$tableName}/{$modelId}/{$image}";
    }
    return "/uploads/no_photo.jpg";
}

function getFile($tableName, $modelId, $file){
    $dir = __DIR__ . "/uploads/{$tableName}/{$modelId}/{$file}";

    if (is_file($dir)){
        return "/uploads/{$tableName}/{$modelId}/{$file}";
    }
    return false;
}

function saveImage($tableName,$modelId, $imageArr){
    $dir = __DIR__ . "/uploads/{$tableName}/{$modelId}/";
    $fileName = $imageArr['name'];

    if (!is_dir($dir)){
        mkdir($dir, 0777, true);
    }
    $fullDir = $dir . $fileName;
    move_uploaded_file($imageArr['tmp_name'], $fullDir);
    return $fileName;
}

function saveVideo($tableName,$modelId, $videoArr){
    $ext = "";
    switch ($videoArr['type']){
        case 'video/x-ms-wmv': $ext = ".wmv"; break;
        case 'video/mp4': $ext = ".mp4"; break;
        default: return false;
    }

    $dir = __DIR__ . "/uploads/{$tableName}/{$modelId}/";
    $fileName = "video_" . md5($videoArr['name'] . time(). rand(1, 99999999)) . $ext;

    if (!is_dir($dir)){
        mkdir($dir, 0777, true);
    }
    $fullDir = $dir . $fileName;
    move_uploaded_file($videoArr['tmp_name'], $fullDir);
    return $fileName;
}

function deleteFile($tableName, $modelId, $fileName){
    $dir = __DIR__ . "/uploads/{$tableName}/{$modelId}/";
    $fullDirection = $dir . $fileName;

    if (is_file($fullDirection)){
        unlink($fullDirection);
    }
}