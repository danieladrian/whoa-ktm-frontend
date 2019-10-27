<?php
namespace illusion;

class Checksum{
  public static function md5($data){
    return file_exists($data)==true?hash_file('md5', $data):hash('md5',$data);
  }  
   
  public static function crc32($data){
    return file_exists($data)==true?hash_file('crc32', $data):hash('crc32',$data);
  } 

  public static function crc32b($data){
    return file_exists($data)==true?hash_file('crc32b', $data):hash('crc32b',$data);
  }  
  
  public static function sha1($data){
    return file_exists($data)==true?hash_file('sha1', $data):hash('sha1',$data);
  } 
  
  public static function sha256($data){
    return file_exists($data)==true?hash_file('sha256', $data):hash('sha256',$data);
  } 
  
  public static function sha512($data){
    return file_exists($data)==true?hash_file('sha512', $data):hash('sha512',$data);
  } 
}

?>