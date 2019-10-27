<?php
use illusion\Checksum;
use illusion\Header;
use illusion\Csrf;

class cv extends Controller{
  public function home(){
    Csrf::make();
    return View::make("index",[
      "interest"=>Model::make("sli")->interest(),
      "csrf"=>Csrf::get()
    ]);
  }
  
  public function experience(){
    $csrf = $this->post("csrf");
    if($csrf!=Csrf::get()){
        header("HTTP/1.1 401 Unauthorized");
        return "Invalid Token";
    }
    return View::make("experience",[
      "formal_education"=>Model::make("education")->select("formal"),
      "informal_education"=>Model::make("education")->select("informal"),
      "works"=>Model::make("experience")->select("work"),
      "organization"=>Model::make("experience")->select("organization"),
      "internship"=>Model::make("experience")->select("internship"),
      "volunteer"=>Model::make("experience")->select("volunteer")
    ]); 
  }
  
  public function seminar(){
      $csrf = $this->post("csrf");
    if($csrf!=Csrf::get()){
        header("HTTP/1.1 401 Unauthorized");
        return "Invalid Token";
    }
        return View::make("seminar",[
      "speaker_seminar"=>Model::make("conference")->select("speaker"),
      "participant_seminar"=>Model::make("conference")->select("participant")
    ]);          
  }
  
  public function personalproject(){
    $csrf = $this->post("csrf");
    if($csrf!=Csrf::get()){
        header("HTTP/1.1 401 Unauthorized");
        return "Invalid Token";
    }
        return View::make("personalproject",[
      "selfproject"=>Model::make("experience")->select("selfproject")
    ]);          
  }
  
  public function skill(){
            $csrf = $this->post("csrf");
    if($csrf!=Csrf::get()){
        header("HTTP/1.1 401 Unauthorized");
        return "Invalid Token";
    }
       return View::make("skill",[
      "skill"=>Model::make("sli")->skill(),
      "language"=>Model::make("sli")->language()
    ]);            
  } 
    
  public function achievement(){
            $csrf = $this->post("csrf");
    if($csrf!=Csrf::get()){
        header("HTTP/1.1 401 Unauthorized");
        return "Invalid Token";
    }
      return View::make("achievement",[
      "achievement"=>Model::make("achievement")->select()
    ]);             
  } 
  
}
?>
