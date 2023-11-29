<?php
require_once __DIR__ . "/../../models/model.php";
$errorMessage = "";
if (empty($_SESSION['user'])){

    if (!empty($_POST)){
//        debug($_POST);
        $login = $_POST['login'];
        $password = $_POST['password'];
        if (!empty($login) && (!empty($password))){
            if (login($login, $password)){
                header('refresh:0;url=/admin');
            }else{
                $errorMessage = "Login yoki parol xato kiritildi";
            }
        }else{
            $errorMessage = "Login yoki parol kiritilmadi";
        }
    }

    require_once __DIR__ . "/../views/login.php";
}else{


    $route = (!empty($_GET['r'])) ? $_GET['r'] : null;
    $showError = "";
    if (!empty($route)){
        switch ($route){
            case 'menu':

                $AllMenus = getAllMenu();
                require_once __DIR__ . "/../views/menu.php";
                break;
            case 'new-menu':

                $parentMenu= getParentMenus();
                if (!empty($_POST)){

                    $title = $_POST['title'];
                    $link = $_POST['link'];
                    $position = $_POST['position'];
                    $order = $_POST['order_by'];
                    $parent = $_POST['parent'];
                    $status = $_POST['status'];

                    if (!empty($title) && !empty($link) && !empty($position) && !empty($order) && !empty($parent) || $parent == 0 && !empty($status) || $status == 0){
                        if (newMenu( $title, $link, $position, $order, $parent, $status)){
                            header('refresh:0;url=/admin?r=menu');die();
                        }
                    }else{
                        $showError = "Kerakli malumotlar to'g'ri kiritilmadi !";
                    }
                }
                require_once __DIR__ . "/../views/form_menu.php";


                break;
            case 'menu-edit':

                $parentMenu= getParentMenus();

                $id = (!empty($_GET['id']) ? $_GET['id'] : null);
                if (!empty($id)){
                    $showMenu = showMenu($id);
                    if (!empty($showMenu)){

                        if (!empty($_POST)){
//                        debug($_POST); die();
                            $id = $_POST['id'];
                            $title = $_POST['title'];
                            $link = $_POST['link'];
                            $position = $_POST['position'];
                            $order = $_POST['order_by'];
                            $parent = $_POST['parent'];
                            $status = $_POST['status'];

                            if (!empty($title) && !empty($link) && !empty($position) && !empty($order) && !empty($parent) || $parent == 0 && !empty($status) || $status == 0){
                                if ($edited = editMenu($id, $title, $link, $position, $order, $parent, $status)){

                                    header('refresh:0;url=/admin?r=menu');die();
                                }

                            }
                        }

                        require_once __DIR__ . "/../views/form_menu.php";
                    }else{
                        require_once __DIR__ . "/../views/404.php";
                    }
                }else{
                    require_once __DIR__ . "/../views/404.php";
                }


                break;
            case 'menu-delete':
                $id = (!empty($_GET['id']) ? $_GET['id'] : null);
                if (!empty($id)){
                    $delete = deleteMenu($id);
                    header('refresh:0;url=/admin?r=menu');die();

                }
                break;
            case 'menu-parent':
                $position = (!empty($_GET['position'])) ? $_GET['position'] : null;
                if (!empty($position)){
                    $menus = getParentMenus($position);
                    $templte = " <option value='0'>Ota elementni tanlang</option>";
                    foreach ($menus as $menu) {
                        $templte .= " <option value='{$menu['id']}'>{$menu['title']}}</option>";
                    }
                    echo $templte;
                }
                break;
            case 'social':
                $allSocial = getAllSocial();
                if (!empty($allSocial)){
                    require_once __DIR__ . "/../views/social.php";

                }else{
                    require_once __DIR__ . "/../views/404.php";
                }
                break;
            case 'new-social':
                $allSocial = getAllSocial();
                if (!empty($_POST)){
                    $class = $_POST['class'];
                    $link = $_POST['link'];
                    $order = $_POST['order_by'];
                    $status = $_POST['status'];

                    if (!empty($class) && !empty($link) && !empty($order) && !empty($status) || $status == 0){
                        if (newSocial($class, $link, $order, $status)){
                            header('refresh:0;url=/admin?r=social');die();
                        }
                    }else{
                        $showError = "Kerakli malumotlar to'g'ri kiritilmadi !";
                    }
                }
                require_once __DIR__ . "/../views/form-social.php";

                break;
            case 'social-edit':
                $allSocial = getAllSocial();
                $id = (!empty($_GET['id']) ? $_GET['id'] : null);
                if (!empty($id)){
                    $showSocial = showSocial($id);
                    if (!empty($showSocial)){
                        if (!empty($_POST)){
//                        debug($_POST); die();
                            $id = $_POST['id'];
                            $class = $_POST['class'];
                            $link = $_POST['link'];
                            $order = $_POST['order_by'];
                            $status = $_POST['status'];

                            if (!empty($class) && !empty($link) && !empty($order) && !empty($status) || $status == 0){
                                if (addSocial($id, $class, $link, $order, $status)){
                                    header('refresh:0;url=/admin?r=social');die();
                                }
                            }else{
                                $showError = "Kerakli malumotlar to'g'ri kiritilmadi !";
                            }
                        }
                    }
                    require_once __DIR__ . "/../views/form-social.php";

                }else{
                    require_once __DIR__ . "/../views/form-social.php";
                }
                break;
            case 'social-delete':
                $id = (!empty($_GET['id']) ? $_GET['id'] : null);
                if (!empty($id)){
                    $delete = deleteSocial($id);
                    header('refresh:0;url=/admin?r=social');die();

                }
                break;
            case 'logout':
                session_destroy();
                header('refresh:0;url=/admin');
                break;
            case 'users':
                if ($_SESSION['user']['status'] < 10){
                    require_once __DIR__ . "/../views/404.php";
                }
                $allUsers = getAllUsers();
                require_once __DIR__ . "/../views/users.php";
                break;
            case 'new-user':
                if ($_SESSION['user']['status'] < 10){
                    require_once __DIR__ . "/../views/404.php";
                }
                if (!empty($_POST)){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $status = $_POST['status'];
                    if (!empty($username) && !empty($password) && !empty($status) || $status == 0){
                        if ($userId = newUser($username, $password, $status)){

                            if (!empty($_FILES)){
                                $imageName = saveImage('user', $userId, $_FILES['avatar']);
                                updateImageName('user', $userId, $imageName, 'avatar');
                            }

                            header('refresh:0;url=/admin?r=users');

                        }
                    }else{
                        $showError = "Nimadir xato ketdi !";
                    }
                }

                require_once __DIR__ . "/../views/form_user.php";
                break;
            case 'delete-user':
                if ($_SESSION['user']['status'] < 10){
                    require_once __DIR__ . "/../views/404.php";
                }
                $id = (!empty($_GET['id']) ? $_GET['id'] : null);
                if (!empty($id)){
                    $delete = deleteUser($id);
                    header('refresh:0;url=/admin?r=users');die();

                }
                break;

            case 'movie':
                $allMovies = getAllMovies();
                require_once __DIR__ . "/../views/movie.php";
                break;

            case 'new-movie':
                $allMovies = getAllMovies();
                $AllGenres = getMovieGenre();
                if (!empty($_POST)){
                    $name = $_POST['name'];
                    $duration = $_POST['duration'];
                    $description = $_POST['description'];
                    $date = $_POST['date'];
                    $genre = $_POST['genre'];
                    $seen = $_POST['seen_count'];
                    $status = $_POST['status'];

                    $upcoming = 0;
                    if (!empty($_POST['upcoming'])){
                        $upcoming = 1;
                    }
                    $top = 0;
                    if (!empty($_POST['top10'])){
                        $top = 1;
                    }
                    $recommend = 0;
                    if (!empty($_POST['recommend'])){
                        $recommend = 1;
                    }
                    if (!empty($name) && !empty($duration) && !empty($description) && !empty($date) && !empty($genre)){
                        if($movieId = addNewMovie($name, $duration, $description, $date, $genre, $seen, $upcoming, $top, $recommend, $status)){
                            if (!empty($_FILES)){

                                if ($_FILES['image']['error'] == 0) {

                                    $imageName = saveImage('movie', $movieId, $_FILES['image']);
                                    updateImageName('movie', $movieId, $imageName, 'image');
                                }
                                if ($_FILES['trailer_file']['error'] == 0){
                                    $trailerName = saveVideo('movie', $movieId, $_FILES['trailer_file']);
                                    if (!$trailerName){

                                        $_SESSION['alert'] = [
                                            'class' => 'danger',
                                            'message' => 'Notogri formatda fayl yuklandi'
                                        ];
                                        return false;
                                    }
                                    updateImageName('movie', $movieId, $trailerName, 'trailer_file');

                                }

                                if ($_FILES['movie_file']['error'] == 0){
                                    $trailerName = saveVideo('movie', $movieId, $_FILES['movie_file']);
                                    if (!$trailerName){

                                        $_SESSION['alert'] = [
                                            'class' => 'danger',
                                            'message' => 'Notogri formatda fayl yuklandi'
                                        ];
                                        return false;
                                    }
                                    updateImageName('movie', $movieId, $trailerName, 'movie_file');

                                }
                            }

                            header('refresh:0;url=/admin?r=movie');die();
                        }
                    }
                }

                require_once __DIR__ . "/../views/form_movie.php";
                break;
            case 'movie-edit':
                $AllGenres = getMovieGenre();
                $id = (!empty($_GET['id'])) ? $_GET['id'] : null;
                if (!empty($id)){
                    $movieData = getAdminMoviesById($id);

                    if (!empty($movieData)){
                        require_once __DIR__ . "/../views/form_movie.php";die();
                    }else{
                        require_once __DIR__ . "/../views/404.php";
                    }

                }else{
                    require_once __DIR__ . "/../views/404.php";
                }
                break;
            case 'trailer-delete':
                $id = (!empty($_GET['id']) ? $_GET['id'] : null);
                if (!empty($id)){
                    $movieData = getAdminMoviesById($id);
                    if (!empty($movieData)){
                        deleteFile('movie', $id, $movieData['trailer_file']);
                        updateImageName('movie', $id, null, 'trailer_file');
                    header('refresh:0;url=/admin?r=movie-edit&id=' . $id);
                    }
                }
                break;
            case 'movie-delete':
                $id = (!empty($_GET['id']) ? $_GET['id'] : null);
                if (!empty($id)){
                    $movieData = getAdminMoviesById($id);
                    if (!empty($movieData)){
                        deleteFile('movie', $id, $movieData['movie_file']);
                        updateImageName('movie', $id, null, 'movie_file');
                        header('refresh:0;url=/admin?r=movie-edit&id=' . $id);
                    }
                }
                break;
            default:
                require_once __DIR__ . "/../views/404.php";
                break;
        }
    }else{
        require_once __DIR__ . "/../views/index.php";
    }
}



