<?php
use illusion\Text;
use illusion\Header;
class Routes{
  protected static $collection=[];
  protected static $count=0;
  public static function add($pattern,$activity,$controller_method,$parameter=[]){
    $ex=explode("@",$controller_method);
    if(!empty($ex[0])){
          $controller=$ex[0];
    }else{
      throw new \Exception("Missing <b>controller</b> in route parameter. Use <b>controller</b>@method");
    }
    if(ISSET($ex[1])){
        $method=$ex[1];
    }else{
       throw new \Exception("Missing <b>method</b> in route parameter. Use controller@<b>method</b>");
    }
    $len=strlen($pattern);
    self::$collection["$len.".self::$count]=[
      "pattern"=>$pattern,
      "activity"=>$activity,
      "controller"=>$controller,
      "method"=>$method,
      "parameter"=>$parameter
    ];
    self::$count++;
  }

  public static function redirect($pattern,$target=APP_URL){
  if(is_array($pattern)){
    rsort($pattern);
    for ($i=0; $i < count($pattern); $i++) {
      $route=array();
      $route=routes::parse($pattern[$i]);
      if(is_array($route)){
        Header::location($target);
        die();
      }
    }
  }else{
    $route=array();
    $route=routes::parse($pattern);
    if(is_array($route)){
      Header::location($target);
      die();
    }
  }
  }

  public static function findRoute(){
    $collection=self::$collection;
    krsort($collection);
    foreach ($collection as $key => $route_data) {
      $pattern=$route_data['pattern'];
      $activity=$route_data['activity'];
      $controller=$route_data['controller'];
      $method=$route_data['method'];
      $parameter=$route_data['parameter'];
          $route=array();
          $route=routes::parse($pattern);
          if(is_array($route)){
                foreach($route as $key=>$value){
                    $method=str_replace("{".$key."}",$value,$method);
                }
                $parameter=array_merge($parameter,$route);
            //end change
              return [
                "activity"=>$activity,
                "controller"=>$controller,
                "method"=>$method,
                "parameter"=>$parameter
              ];
          }
    }
    return null;
  }

  public static function parse($pattern){
      $uri=str_replace(APP_PATH,"",$_SERVER['REQUEST_URI']);
      $pattern=str_replace("?","([?])",$pattern);
      $pattern=str_replace("/","\/",$pattern);
      $pat=preg_split("/{[a-zA-Z0-9]+}|{[a-zA-Z]+_[a-zA-Z]+}/", $pattern);
      
      $count=count($pat);
      $cek=0;
      if(empty($pat[$count-1])){
        unset($pat[$count-1]);
        $cek=1;
      }
      $count=count($pat);
      $regex="";
      $var=$pattern;
      //get regex
      for($i=0;$i<$count;$i++){
      $var=str_replace($pat[$i],"",$var);
      if($cek==0){
        if($i==$count-1){
          $regex.=$pat[$i];
        }else{
          $regex.=$pat[$i];
          if($i==0){
            $regex.="([a-zA-Z0-9-+]+)";
          }else{
            $regex.="([a-zA-Z0-9-+]+)";
          }
        }
      }else{
        $regex.=$pat[$i];
        if($i==0){
          $regex.="([a-zA-Z0-9-+]+)";
        }else{
          $regex.="([a-zA-Z0-9-+]+)";
        }
      }
      }

      $key=explode("}",str_replace("{","",$var));
      $output = array();
      $result = preg_match_all("/$regex/",$uri,$output, PREG_PATTERN_ORDER, 0);
      if($result==0 || $output[0][0]!=$uri){
          return "";
      }else{
          $return_data = array();
          $j=1;
          for($i=0;$i<count($key);$i++){
              if(!empty($key[$i])){
                  if(!empty($output[$j])){
                      $return_data[$key[$i]] = $output[$j][0];
                      $j++;
                  }
              }
          }
          return $return_data;
      }
      /*
      if($c==0){
        return "";
      }else{
        if(empty($output[0])){
          $post=array();
          $txtlen=strlen($uri);
          $string=str_split($uri);
          $index=0;
          $rec=0;
          $text="";
          $tick=0;
          for($i=0;$i<$count;$i++){
            $pat[$i]=str_replace("([?])","?",$pat[$i]);

          }

          //get data
          for($i=0;$i<$txtlen;$i++){
          if($rec==0){
            $text.=$string[$i];

            if($text==$pat[$index]){
              $text="";
              $index++;
              $rec=1;
            }
          }else if($rec==1){
            $text.=$string[$i];
          if($index<=$count-1){
           if(Text::left($text,strlen($pat[$index]))==$pat[$index]){
             $post[$key[$tick]]=Text::right($text,strlen($text)-strlen($pat[$index]));
             $tick++;
              $index++;
              $text="";
           }
         }else{

          if($i==$txtlen-1){
            $post[$key[$tick]]=$text;
            $index++;
            $text="";
          }
         }
          }
          }
          return $post;

        }else{
          return "";
        }
      }*/

  }
}

?>