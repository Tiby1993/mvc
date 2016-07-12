<?php

class model_users extends Application {
  function __construct() {
        // connect to database
      try{
      include 'database.php';
      $cfg = "application/include/config.php";
      new database($cfg);
      } catch(Exception $exc ) {
            echo $exc->getMessage();
      }
      $this->users_list();
  }
  function users_list() {
      $data;
        // Query from  the database
      $query = "SELECT * FROM `users`";
      if(!$sql = mysql_query($query))
      {
        throw new Exception ("Error: Can not excute te query");
      }
      else
      {
        $num = mysql_num_rows($sql);
       if($num > 0)
        {
            for($i=0;$i<$num;$i++){
              $data[$i] = mysql_fetch_array($sql);              
            }
        }
      }

    return $data;
  }
}

