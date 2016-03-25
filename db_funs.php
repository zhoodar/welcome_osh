<?
   
   function db_connect()
    {
        $host = 'localhost';
        $user = 'admin';
        $pswd = '12345';
        $db = 'base_search';
        
        $connection = mysql_connect($host, $user, $pswd);
        mysql_query("SET NAMES utf8");
        if(!$connection || !mysql_select_db($db,$connection))
        {
            return false;
        }
        return $connection;
    }

?>