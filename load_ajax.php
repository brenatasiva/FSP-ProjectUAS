<?php
    session_start();
	include("connect.php");
	$mysqli = connect();
	
	if($mysqli->connect_errno){
		printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
	}else{
		$sender = $_POST['sender'];
        $hasil = "";

        $sql = "SELECT * from users where iduser != ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("i",$sender);
        $stmt->execute();
        $res = $stmt->get_result();
        while ($row = $res->fetch_assoc()) {
            $sql = "SELECT * from chat where (sender = ? and receiver = ?) or (sender = ? and receiver = ?) order by idchat desc limit 1";
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param("iiii", $sender, $row['iduser'], $row['iduser'], $sender);
            $stmt->execute();
            $res2 = $stmt->get_result();
            $row2 = $res2->fetch_assoc();
            if(mysqli_num_rows($res2) > 0) $lastmsg = $row2['message'];
            else $lastmsg = "No New Message";
            
            if(strlen($lastmsg) > 28) {
                $lastmsg = substr($lastmsg, 0, 28).'...';
            }
            
            $hasil .= '<div class="list-chat" idreceiver=' . $row['iduser'] . ' namaheader='. $row['name'] .'>
                            <div class="profile-picture">
                                <img src="img/'. $row['iduser'] . '.jpg">
                            </div>
                            <div class="info-chat">
                                <div class="profile-name">
                                    <h5 id="nama-header">' . $row['name'] . '</h5>
                                </div>
                                <div class="chat-content">
                                    <p>' . $lastmsg . '</p>
                                </div>
                            </div>
                        </div>';
        }
        echo $hasil;
	}
?>