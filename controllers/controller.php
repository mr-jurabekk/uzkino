 <?php
require_once __DIR__ . "/../models/model.php";

$allHeaderMenus = getAllMenuItems(HEADER_MENU_POSITION);
$allFooterLinks = getAllSocialItems(FOOTER_MENU_POSITION);
 $allSlides = getSlideItems();
 $getAllgenre = getLatestMovie('getGenres');
 $latestMovies = getLatestMovie();
 $upComing = getLatestMovie('upComing');
 $topMovies = getLatestMovie('top10');
 $recommandMovies = getLatestMovie('recommand');
 $suggestedMovies = getLatestMovie('suggest');


 $route = (!empty($_GET['route'])) ? $_GET['route'] : null;
 if (!empty($route)){
     switch ($route){
         case 'movie-view':
             $id = (!empty($_GET['id'])) ? $_GET['id'] : null;
             if (!empty($id)){


                 $movieData = getMovieDataById($id);
                 if (!empty($movieData)){
                     addSeenCount('movie', $id);
                     $movieImage = getImage('movie', $movieData['id'], $movieData['image']);
                     require_once __DIR__ . "/../views/movie_view.php";
                 }else{
                     require_once __DIR__ . "/../views/404.php";
                 }


             }else{
                 require_once __DIR__ . "/../views/404.php";

             }
         break;
         case 'blog':
             $news = getAllNews();
             $newsCategories =getAllNewsCategories();
             require_once __DIR__ . "/../views/blog.php";
         break;

         case 'blog-category':
             $id =  (!empty($_GET['id'])) ? $_GET['id'] : null;
             if (!empty($id)){
                 $newsCategories =getAllNewsCategories();
                 $newsCategory =getNewsCategory($id);
                 require_once __DIR__ . "/../views/blog_category.php";
             }
         break;

         case 'blog-view':
             $id =  (!empty($_GET['id'])) ? $_GET['id'] : null;
             if (!empty($id)){
                 addSeenCount('news', $id);
                 $newsCategories =getAllNewsCategories();
                 $newsCategory =getNewsId($id);
                 require_once __DIR__ . "/../views/blog_view.php";
             }
         break;

         case 'view-genre':
             $id =  (!empty($_GET['id'])) ? $_GET['id'] : null;
             if (!empty($id)){
                 $getAllgenre = getLatestMovie();
                 require_once __DIR__ . "/../views/genre.php";
             }
         break;
         default:
             require_once __DIR__ . "/../views/404.php";
     }

 }else{
     require_once __DIR__ . "/../views/index.php";
 }


