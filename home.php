<?php
include('config.php');
include('SendGCM.php');


   $title="title...";
   $msg="message...";
   $logo="logo...";
   $name="name..."; 
   $url="url...";
   if(strlen(trim($title))>1 && strlen(trim($msg))>1 && strlen(trim($logo))>1 && strlen(trim($name))>1 && strlen(trim($url))>1 )
   {
     if($gcmClass->insertNotification($title, $msg, $logo, $name, $url)){
       $registrationId = $gcmClass->getIDs();
       $total_rids=[];
       foreach($registrationId as $r){
          array_push($total_rids, $r->rid);
       }
    $fields = array('registration_ids'  => $total_rids);
    sendGCM($fields);
    echo "Done";
   }
  }

//include('header.php');
?>