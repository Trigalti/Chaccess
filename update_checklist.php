 <?php

 	

 	if ($listID) {
 		echo lol;
 	}

 	if(isset($_POST["currentTodoID"])) { 

 	$currentTodoID = json_decode($_POST['currentTodoID']); 
 	$listID = json_decode($_POST['listID']);
 	// $list
 	echo $currentTodoID;



 	echo $listID;

 	include 'scripts/db_connect.php';

 	echo 'heellooo';
 	$receiveCheckTodo = "SELECT ID from cnc_check_todo WHERE id_todo = $currentTodoID AND id_checklist = $listID";
    $mysqli->query($receiveCheckTodo) or die(mysql_error());

    $checkTodo = $receiveCheckTodo->fetch_array(MYSQLI_ASSOC);

    $checkTodoID = $checkTodo['ID'];

    echo $checkTodoID;

    $checkTodoStatus = $checkTodo['isturnedon'];

    echo $checkTodoStatus;

    if ($checkTodoStatus == 0){
    	$checkTodoStatus = 1;
    } else {
    	$checkTodoStatus = 0;
    }

	$updateCheckStatus = "UPDATE 'cnc_check_todo' SET isturnedon = ('$checkTodoStatus') WHERE ID = ('$checkTodoID')"; 
    
	$mysqli->query($updateCheckStatus);

	};
 ?>
