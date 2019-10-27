<?php
use illusion\Database;
class conference{
  public function select($condition="participant"){
    $db=new Database();
    $sql=$db->run_query("SELECT * FROM table_conference WHERE status=? ORDER BY end DESC",[$condition]);
    return $sql->fetchAll();
  }
}

?>
