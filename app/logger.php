<?php
Class Logger
{
    public static function setLog($string, $modulo)
    {
        $config = parse_ini_file(__DIR__."/config/global.ini");
        if($config['log'] == true){
            $file = fopen(__DIR__."/log/system.log", "a+");
            fwrite($file, "[".date("Y-m-d H:i:s.u")." ".$_SERVER['REMOTE_ADDR']." ". $_SERVER['HTTP_X_FORWARDED_FOR']." - $modulo ] ".$string."\n");
            fclose($file);
        }
    }
}