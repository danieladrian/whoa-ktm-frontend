<?php
namespace illusion;
class AccessDeniedHttpException extends \RuntimeException{
  protected $message;
  public function __construct($message=null) {
    header("HTTP/1.1 403 Access Denied");
    parent::__construct($message, 403);
  }

}

?>
