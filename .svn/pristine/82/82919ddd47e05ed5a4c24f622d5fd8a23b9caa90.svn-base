<?php
require_once(dirname(__FILE__)."/"."global.php");



  if(strlen($queryString) >0) {		
	  $query = $db->query("SELECT title FROM {$pre}article WHERE title LIKE '$queryString%' ORDER BY hits DESC LIMIT 10");
		  while ($result = $db->fetch_array($query)) {
		
			  echo '<li onClick="fill(\''.$result[title].'\');">'.$result[title].'</li>';
		  }
  }

?>