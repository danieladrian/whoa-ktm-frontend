<?php
namespace illusion;
class NotFoundHttpException extends \RuntimeException{
  protected $message;
  public function __construct($message=null) {
    header("HTTP/1.1 404 Not Found");
    parent::__construct($message, 404);
  }

}

?>
