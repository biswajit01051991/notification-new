<?php


function deleteGCM($rid) {
  $check = false;
  if($_SERVER['HTTP_ORIGIN'] && $_SERVER['HTTP_ORIGIN'] == "https://push.9lessons.info"){
    $check = true;
  }
  
  if($check){
     $db = getDB();
     $sql = "DELETE FROM GMC WHERE rid=:rid";
     $stmt = $db->prepare($sql);
     $stmt->bindParam("rid", $rid,PDO::PARAM_STR);
     $stmt->execute();
     echo '{"success":{"text":"done"}}';
  }
  else{
     echo '{"error":{"text":"No access"}}';
  }
  }


?>