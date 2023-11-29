<?php

function getLatestMovie($sectionStatus = null){
    global $db;
    switch ($sectionStatus){
        case null:
            $query = "SELECT * FROM `movie` WHERE `status` = 1 ORDER BY `id` DESC ";
        break;
        case 'upComing':
            $query = "SELECT * FROM `movie` WHERE `status` = 1 AND `upcoming` = 1 ";
        break;
        case 'getGenres':
            $query = "SELECT * FROM `movie` WHERE `status` = 1";
        break;
        case 'top10':
            $query = "SELECT * FROM `movie` WHERE `status` = 1 AND `top10` = 1";
        break;
        case 'recommand':
            $query = "SELECT * FROM `movie` WHERE `status` = 1 AND `recommand` = 1";
        break;
        case 'suggest':
            $query = "SELECT * FROM `movie` WHERE `status` = 1 AND `suggestion` = 1";
        break;


    }
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));

    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getMovieDataById($id){
    global $db;
    $query = "SELECT * FROM `movie` WHERE `status` = 1 AND `id` = $id";

    $result = @mysqli_query($db, $query) or die(mysqli_error($db));

    return mysqli_fetch_assoc($result);
}

////////////////////////// Back END

function getAllMovies(){
    global $db;
    $query = "SELECT * FROM `movie`";

    $result = @mysqli_query($db, $query) or die(mysqli_error($db));

    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function addNewMovie($name, $duration, $description, $date, $genre, $seen, $upcoming, $top, $recommend, $status){
    global $db;
    $name = mysqli_real_escape_string($db, $name);
    $description = mysqli_real_escape_string($db, $description);
    $query = "INSERT INTO `movie`(`name`, `duration`, `description`, `date`, `genre`, `seen_count`, `upcoming`, `top10`, `recommand`, `status`) VALUES ('$name', '$duration', '$description', '$date', '$genre', '$seen','$upcoming', '$top', '$recommend', '$status')";
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));
    if (mysqli_affected_rows($db) > 0){
        return mysqli_insert_id($db);
    }else{
        return false;
    }
}

function getAdminMoviesById($id){
    global $db;
    $query = "SELECT * FROM `movie` WHERE `id` = '$id'";

    $result = @mysqli_query($db, $query) or die(mysqli_error($db));

    return mysqli_fetch_assoc($result);
}

function getMovieGenre(){
    global $db;
    $query = "SELECT * FROM `genre`";

    $result = @mysqli_query($db, $query) or die(mysqli_error($db));

    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}
