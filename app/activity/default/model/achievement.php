<?php
use illusion\Database;
class achievement{
  public function select($condition="formal"){
    $db=new Database();
    $sql=$db->run_query("SELECT * FROM table_achievement ORDER BY date DESC");
    return $sql->fetchAll();
  }
}

?>
