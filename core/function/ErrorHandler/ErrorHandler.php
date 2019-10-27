<?php
namespace illusion;

class ErrorHandler{
    protected static $debug;
    protected static $error_page;
    public static function register($debug=true,$errorpage="Error.php",$error_types=E_ALL){
        set_error_handler("\illusion\ErrorHandler::handler",$error_types);

        self::$debug=$debug;
        self::$error_page=$errorpage;
        error_reporting($error_types);
    }

    public static function handler($error_level,$error_message,$error_file,$error_line){
        ob_end_clean();
        $debug=self::$debug;
        if($debug==true){
        $debug_backtrace=debug_backtrace();
        }
        include __DIR__."/../../page/Error/".self::$error_page;
        die();
    }


}

?>
