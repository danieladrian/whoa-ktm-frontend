<?php
namespace illusion;

class ExceptionHandler{
  protected static $debug;
  protected static $exception_page;
  public static function register($debug=true,$exceptionpage="Exception.php"){
    set_exception_handler("\illusion\ExceptionHandler::handler");
    self::$debug=$debug;
    self::$exception_page=$exceptionpage;
  }

  public static function handler($exception){
      $exception_message=$exception->getMessage();
      $exception_code=$exception->getCode();
      $exception_file=$exception->getFile();
      $exception_line=$exception->getLine();
      $exception_trace=$exception->getTrace();
      $debug=self::$debug;
      switch($exception_code){
        case 1:
        $exception_title=$exception_message;
        break;
        case 403:
        $exception_title="Access Denied !!!";
        break;
        case 404:
        $exception_title="Sorry, the page you are looking for could not be found.";
        break;
        case 503:
        $exception_title="Sorry, service is not available.";
        break;
        default:
        $exception_title="Whoops, looks like something went wrong.";
      }

      switch($exception_code){
      case 1:
      include __DIR__."/../../page/Exception/UserException.php";
      break;
      default:
      include __DIR__."/../../page/Exception/".self::$exception_page;
      }
      die();
  }
}

include "Exception/NotFoundHttpException.php";
include "Exception/AccessDeniedHttpException.php";
include "Exception/ServiceUnavailableHttpException.php";
include "Exception/UserException.php";
?>
