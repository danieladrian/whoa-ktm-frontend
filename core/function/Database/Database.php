<?php
namespace illusion;

class Database extends \PDO{
    protected static $db=[];
    public function __construct($db_engine=DB_ENGINE,$host=DB_SERVER,$port=DB_PORT,$username=DB_USER,$password=DB_PASS,$db_name=DB_NAME,$charset="utf8"){
      $opt = [
            parent::ATTR_ERRMODE            => parent::ERRMODE_EXCEPTION,
            parent::ATTR_DEFAULT_FETCH_MODE => parent::FETCH_ASSOC,
            parent::ATTR_EMULATE_PREPARES   => false,
      ];

      if(!ISSET($db[$db_name])){
      $db[$db_name]=\PDO::__construct("$db_engine:host=$host;dbname=$db_name;port=$port;charset=$charset", $username, $password,$opt);
      }
      return $db[$db_name]; 
    }


    public function run_query($sql,$data=[]){
      $temp=$this->prepare($sql);
      $temp->execute($data);
      return $temp;
    }
}
?>
