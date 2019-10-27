<?php
use illusion\Database;
class education{
  public function select($condition="formal"){
    $db=new Database();
    $sql=$db->run_query("SELECT * FROM table_education WHERE status=? ORDER BY end DESC",[$condition]);
    return $sql->fetchAll();
  }
}

?>
