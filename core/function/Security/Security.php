<?php
namespace illusion;

class Security{

    static function encrypt($plaintext="",$pass=ENCRYPT_KEY){
    return \Defuse\Crypto\Crypto::encryptWithPassword($plaintext, $pass, false);
    }

    static function decrypt($chipertext="",$pass=ENCRYPT_KEY){
    return \Defuse\Crypto\Crypto::decryptWithPassword($chipertext, $pass, false);
    }

    static function antiinjection($data=""){
      $filter_data = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
      return $filter_data;
    }

    static function hash($pass=""){
      $options = [
        'cost' => 12,
      ];
      return password_hash($pass, PASSWORD_BCRYPT, $options);
    }

    static function verify_hash($pass="",$hash=""){
      $state=false;

      if(password_verify($pass, $hash)){
        $state=true;
      }
      return $state;
    }
}



 ?>
