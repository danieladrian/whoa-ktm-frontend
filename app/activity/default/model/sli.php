<?php
use illusion\Database;
class sli{
  public function skill(){
    $db=new Database();
    $sql=$db->run_query("SELECT * FROM table_skill_category");
    $category = $sql->fetchAll();
      
    $result = array();
    foreach($category as $data){
        
        $cat = array();
        $cat['id'] = $data['id'];
        $cat['skill_category'] = $data['skill_category'];
        $cat['icon'] = $data['icon'];
        
        $sql2 = $db->run_query("SELECT * FROM table_skill WhERE skill_category_id=? ORDER BY value DESC",[$data['id']]);
        $item = $sql2->fetchAll();
        $cat['item'] = $item;
        
        array_push($result,$cat);
    } 
    return $result;
  }
  
  public function language(){
    $db=new Database();
    $sql=$db->run_query("SELECT * FROM table_language ORDER BY status ASC");
    return $sql->fetchAll();
  }
  
  public function interest(){
    $db=new Database();
    $sql=$db->run_query("SELECT * FROM table_interest");
    return $sql->fetchAll();
  }
}

?>
