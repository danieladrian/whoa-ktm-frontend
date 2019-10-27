<?php
namespace illusion;
class UserException extends \Exception{
  protected $message;
  public function __construct($message=null) {
    parent::__construct($message,1);
  }

}

?>
