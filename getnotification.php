<?php
include('config.php');


 getNotification();
function getNotification(){
    $db = getDB();
    $con=mysqli_connect("us-cdbr-iron-east-04.cleardb.net","b630a07ef213aa","87ba03a0","heroku_32d1908bbbb8fa1");
    $sql1 = "SELECT title, msg, logo, url, name FROM notifications ORDER BY nid DESC LIMIT 1";
    $result=mysqli_query($con,$sql1);
    // Associative array
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

    /*
    $stmt1 = $db->prepare($sql1);
    $stmt1->execute();
    $notification = $stmt1->fetch(PDO::FETCH_OBJ); 
    $notification->action = $notification->url;
    $notification->click_action = $notification->url;
    */
    if($row){
      $notification = json_encode($row);
      echo '{"data": ' .$notification . '}';
    }
 }
?>