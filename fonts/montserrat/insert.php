<?php
   
   $db = new PDO('sqlite:https://gitlab.com/hanercamilo/teco/blob/master/WindowsStorage');

   $query = $_POST['query'];
      
   require_once('bodyinsert.php');
  
?>