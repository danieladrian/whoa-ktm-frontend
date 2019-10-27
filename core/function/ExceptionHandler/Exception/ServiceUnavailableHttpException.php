<?php
namespace illusion;
class ServiceUnavailableHttpException extends \RuntimeException{
  protected $message;
  public function __construct($message=null) {
    header("HTTP/1.1 503 Service Unavailable");
    parent::__construct($message, 503);
  }

}

?>
