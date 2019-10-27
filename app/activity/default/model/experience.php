<?php
use illusion\Database;
class experience{
  public function select($condition="work"){
    $db=new Database();
    $sql=$db->run_query("SELECT * FROM table_experience WHERE status=? ORDER BY end IS NULL DESC, end DESC ",[$condition]);
    return $sql->fetchAll();
  }
}

?>
