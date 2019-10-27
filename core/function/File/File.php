<?php
namespace illusion;

class File{
   public function upload($file,$folder){
    
   } 
   
   public function create_download_link($file){
    
   }
   
   public function info($file,$checksum=false){
    if(file_exists($file)){
        $path=pathinfo($file);
        
        return [
        "directory"=>$path['dirname'],
        "fullname"=>$path['basename'],
        "shortname"=>$path['filename'],
        "extension"=>$path['extension'],
        "size"=>"",
        "crc32"=>$checksum==true?:null,
        "md5"=>$checksum==true?:null
        ];
    }else{
    return null;
    }
   }
}

?>