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
    
    function get_organ_bank($id)
    {
		db_connect();
		$query = ("SELECT * FROM banks WHERE id='$id' ");
		$result= mysql_query($query);
		$row = mysql_fetch_array($result);
		return $row;
	}
	
	function get_organ_detsad($id)
    {
		db_connect();
		$query = ("SELECT * FROM kid_garden WHERE id='$id' ");
		$result= mysql_query($query);
		$row = mysql_fetch_array($result);
		return $row;
	}
	
	function get_organ_cinema($id)
    {
		db_connect();
		$query = ("SELECT * FROM cinemas WHERE id='$id' ");
		$result= mysql_query($query);
		$row = mysql_fetch_array($result);
		return $row;
	}
	
	function get_organ_nigthclub($id)
    {
		db_connect();
		$query = ("SELECT * FROM nigthclubs WHERE id='$id' ");
		$result= mysql_query($query);
		$row = mysql_fetch_array($result);
		return $row;
	}
	
	function get_organ_restoran($id)
    {
		db_connect();
		$query = ("SELECT * FROM restobars WHERE id='$id' ");
		$result= mysql_query($query);
		$row = mysql_fetch_array($result);
		return $row;
	}
	
	function get_organ_school($id)
    {
		db_connect();
		$query = ("SELECT * FROM schools WHERE id='$id' ");
		$result= mysql_query($query);
		$row = mysql_fetch_array($result);
		return $row;
	}
	
	function get_organ_sportclub($id)
    {
		db_connect();
		$query = ("SELECT * FROM sportclubs WHERE id='$id' ");
		$result= mysql_query($query);
		$row = mysql_fetch_array($result);
		return $row;
	}
	
	function get_organ_mall($id)
    {
		db_connect();
		$query = ("SELECT * FROM mall WHERE id='$id' ");
		$result= mysql_query($query);
		$row = mysql_fetch_array($result);
		return $row;
	}
	
	function get_organ_uchcenter($id)
    {
		db_connect();
		$query = ("SELECT * FROM uch_center WHERE id='$id' ");
		$result= mysql_query($query);
		$row = mysql_fetch_array($result);
		return $row;
	}
	
	function get_organ_vuz($id)
    {
		db_connect();
		$query = ("SELECT * FROM vuz WHERE id='$id' ");
		$result= mysql_query($query);
		$row = mysql_fetch_array($result);
		return $row;
	}
	
	function get_organ_butik($id)
    {
		db_connect();
		$query = ("SELECT * FROM butik WHERE id='$id' ");
		$result= mysql_query($query);
		$row = mysql_fetch_array($result);
		return $row;
	}
	
	function get_organ_attorney($id)
    {
		db_connect();
		$query = ("SELECT * FROM attorney WHERE id='$id' ");
		$result= mysql_query($query);
		$row = mysql_fetch_array($result);
		return $row;
	}
	
	
	 function get_organ_hotel($id)
    {
		db_connect();
		$query = ("SELECT * FROM hotels WHERE id='$id' ");
		$result= mysql_query($query);
		$row = mysql_fetch_array($result);
		return $row;
	}
	
	function get_organ_market($id)
    {
		db_connect();
		$query = ("SELECT * FROM market WHERE id='$id' ");
		$result= mysql_query($query);
		$row = mysql_fetch_array($result);
		return $row;
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
     function get_attorney()
    {
        db_connect();
        $query = "SELECT * FROM attorney ORDER BY id ";
        $result = mysql_query($query);
        $result = db_result_to_array($result);
        return $result;
    }

?>