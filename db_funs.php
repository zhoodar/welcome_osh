<?
   
   function db_connect()
    {
        $host = 'localhost';
        $user = 'admin';
        $pswd = '12345';
        $db = 'base_search';
        
        $connection = mysql_connect($host, $user, $pswd);
        mysql_query("SET NAMES tf8");
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
	
	function get_banks()
    {
        db_connect();
        $query = "SELECT * FROM banks ORDER BY id ";
        $result = mysql_query($query);
        $result = db_result_to_array($result);
        return $result;
    }
	
	function get_butik()
    {
        db_connect();
        $query = "SELECT * FROM butik ORDER BY id ";
        $result = mysql_query($query);
        $result = db_result_to_array($result);
        return $result;
    }
	
	function get_cinema()
    {
        db_connect();
        $query = "SELECT * FROM cinemas ORDER BY id ";
        $result = mysql_query($query);
        $result = db_result_to_array($result);
        return $result;
    }

	function get_hotel()
    {
        db_connect();
        $query = "SELECT * FROM hotels ORDER BY id ";
        $result = mysql_query($query);
        $result = db_result_to_array($result);
        return $result;
    }
    
    function get_kid_garden()
    {
        db_connect();
        $query = "SELECT * FROM kid_garden ORDER BY id ";
        $result = mysql_query($query);
        $result = db_result_to_array($result);
        return $result;
    }
	
	 function get_mall()
    {
        db_connect();
        $query = "SELECT * FROM mall ORDER BY id ";
        $result = mysql_query($query);
        $result = db_result_to_array($result);
        return $result;
    }
    
	 function get_market()
    {
        db_connect();
        $query = "SELECT * FROM markets ORDER BY id ";
        $result = mysql_query($query);
        $result = db_result_to_array($result);
        return $result;
    }
    
     function get_nigth_club()
    {
        db_connect();
        $query = "SELECT * FROM nigthclubs ORDER BY id ";
        $result = mysql_query($query);
        $result = db_result_to_array($result);
        return $result;
    }
    
    function get_restobar()
    {
        db_connect();
        $query = "SELECT * FROM restobars ORDER BY id ";
        $result = mysql_query($query);
        $result = db_result_to_array($result);
        return $result;
    }
    
    function get_school()
    {
        db_connect();
        $query = "SELECT * FROM schools ORDER BY id ";
        $result = mysql_query($query);
        $result = db_result_to_array($result);
        return $result;
    }
    
     function get_sportclub()
    {
        db_connect();
        $query = "SELECT * FROM sportclubs ORDER BY id ";
        $result = mysql_query($query);
        $result = db_result_to_array($result);
        return $result;
    }
    
     function get_uch_center()
    {
        db_connect();
        $query = "SELECT * FROM uch_center ORDER BY id ";
        $result = mysql_query($query);
        $result = db_result_to_array($result);
        return $result;
    }
    
     function get_vuz()
    {
        db_connect();
        $query = "SELECT * FROM vuz ORDER BY id ";
        $result = mysql_query($query);
        $result = db_result_to_array($result);
        return $result;
    }

?>