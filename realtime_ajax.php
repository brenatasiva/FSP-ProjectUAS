<?php  
 session_start();
 include("connect.php");
 $mysqli = connect();
 
 if($mysqli->connect_errno){
  printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
 }else{
  $sender = $_POST['sender'];
  $receiver = $_POST['receiver'];
  $result = "";

  $sql = "SELECT * from chat where (sender = ? and receiver = ?) or (sender = ? and receiver = ?)";
  $stmt = $mysqli->prepare($sql);
  $stmt->bind_param("iiii", $sender, $receiver, $receiver, $sender);
  $stmt->execute();
  $res = $stmt->get_result();

  $sql = "SELECT name from users where iduser = ?";
  $stmt = $mysqli->prepare($sql);
  $stmt->bind_param("i", $receiver);
  $stmt->execute();
  $res2 = $stmt->get_result();
  $row2 = $res2->fetch_assoc();

  while ($row = $res->fetch_assoc()) {
   $date = date_create($row['time']);
   

   if($row['sender'] == $sender){
    $result .= '<div class="chat-keluar">
        <div class="information">
         <p>Read</p>
         <p>' . date_format($date,"h:i A") . '</p>
        </div>    
        <div class="details">
         <p>' . $row['message'] . '</p>
        </div>
       </div>';
   
   }else{
    $result .= '<div class="chat-masuk"> 
        <div class="details">
         '.$row2['name'].'
         <p>' . $row['message'] . '</p>
        </div>
        <div class="information">
         <p>Read</p>
         <p>' . date_format($date,"h:i A") . '</p>
        </div>
       </div>';
   }
  }
  echo $result;
 }
?>