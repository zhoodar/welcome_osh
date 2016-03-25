<?
   
   function db_connect()
    {
        $host = 'localhost';
        $user = 'admin';
        $pswd = '12345';
        $db = 'base_search';
        
        $connection = mysql_connect($host, $user, $pswd);
        mysql_query("SET NAME Utf-8");
        if(!$connection || !mysql_select_db($db,$connection))
        {
            return false;
        }
        return $connection;
    }
	
	function db_result_to_array($result)
    {
        $res_array = array();
        
        $count = 0;
        
        while($row = mysql_fetch_array($result))
        {
            $res_array[$count] = $row;
            $count++;
        }
        return $res_array;
    }
	
	
	function get_cat_otdyh()
    {
        db_connect();
        
        $query = "SELECT * FROM ot_ra_categories ORDER BY id ";
        
        $result = mysql_query($query);
        
        $result = db_result_to_array($result);
        
        return $result;
    }
	
	function get_cat_torgov()
    {
        db_connect();
        
        $query = "SELECT * FROM to_us_categories ORDER BY id ";
        
        $result = mysql_query($query);
        
        $result = db_result_to_array($result);
        
        return $result;
    }
	
	function get_cat_ucheb()
    {
        db_connect();
        
        $query = "SELECT * FROM uch_za_categories ORDER BY id ";
        
        $result = mysql_query($query);
        
        $result = db_result_to_array($result);
        
        return $result;
    }
	

?>