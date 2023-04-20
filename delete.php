<?php
if(!empty($_POST['path'])){
  if(unlink($_POST['path'])){//basically deletes file from server.
  echo "image deleted";
  }
}



?>
