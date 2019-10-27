<?php
use illusion\Database;
use illusion\Header;
use illusion\Security;
use illusion\ErrorHandler;
use illusion\ExceptionHandler;
use illusion\NotFoundHttpException;
use illusion\AccessDeniedHttpException;
use illusion\ServiceUnavailableHttpException;

class illusion{

  public function __construct(){
    if(APP_ERROR_HANDLER){
    ErrorHandler::register(APP_DEBUG);
    ExceptionHandler::register(APP_DEBUG);
    register_shutdown_function("\illusion::shutdown");
    }
    //collect all route.
    require_once __DIR__."/../app/auth/auth.php";
    require_once __DIR__."/../app/routes/routes.php";
    require_once __DIR__."/../app/function/function.php";
  }

  public function maintainence(){
    throw new ServiceUnavailableHttpException;
  }

  public function prompt(){
    header('WWW-Authenticate: Basic realm="Restricted Data"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Access denied!!!';
    exit;
  }

  public function auth(){
    if (!isset($_SERVER['PHP_AUTH_USER'])) {
        $this->prompt();
    } else {
        if(Security::antiinjection($_SERVER['PHP_AUTH_USER'])!=APP_USER OR Security::antiinjection($_SERVER['PHP_AUTH_PW'])!=APP_PASSWORD){
            $this->prompt();
        }
    }
  }

  public function start(){
    //get match route
    $result = routes::findRoute();
    if($result==null){
      //route is not exist
      throw new NotFoundHttpException("We cannot find proper route path. You can add them in <b>app/routes/routes.php</b>");

    }else{
      //route is exist
      $activity=$result["activity"];
      $controller=$result["controller"];
      $method=$result["method"];
      $parameter=$result["parameter"];
        $controller_path=__DIR__."/../app/activity/$activity/controller/$controller.php";
        if(!file_exists($controller_path)){
            $controller_path=__DIR__."/../app/activity/$activity/Controller/$controller.php";
        }
        //get if controller path exist
        if(!file_exists($controller_path)){
          //controller_path is not exist
          header("HTTP/1.0 404 Not Found");
		  //throw new NotFoundHttpException("<hr>We cannot find \"<b>$controller.php</b>\" inside \"<b>app/activity/$activity/controller/</b>\" !!!<br>Check your route setting in <b>app/activity/routes.php</b>");
        }else{
          //controller_path is exist
          require_once $controller_path;
          $controller=str_replace(array("/","\\"),"#",$controller);
          $class=explode("#",$controller);
          $last=count($class)-1;
          // run class $controller as object
          $controller=$class[$last];
          $control=new $controller($activity,$controller,$method,$parameter);
          view::set($activity);
          model::set($activity);
          //run method inside controller
          $result=$control->$method();
          //if result not empty then echo the response
          if(!empty($result)){
              echo $result;
          }
        }

    }

  }

  public static function shutdown(){
    $_SESSION["PREVIOUS_PAGE"]=APP_URI;
  }
}

?>
