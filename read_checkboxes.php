<?php

        $selectedTags = json_decode($_POST['tags']); 

        $matches = implode(',',$selectedTags);

        include 'scripts/db_connect.php';

        $getTodos = "SELECT DISTINCT id_todo, name, content FROM todos INNER JOIN cnc_tags_todo ON todos.id = cnc_tags_todo.id_todo WHERE cnc_tags_todo.id_tags in ($matches)";
        $todosResult = $mysqli->query($getTodos) or die(mysql_error());



        /* Get project name and insert it into the newly created checklist */
        $projectName = json_decode($_POST['projectName']);

        $createList = "INSERT INTO `checklists`(`NAME`) VALUES ('$projectName')";

        $mysqli->query($createList) or die(mysql_error());

        $fetchListID = "SELECT ID from checklists ORDER BY ID DESC LIMIT 1";
        $list = $mysqli->query($fetchListID);
        $list = $list->fetch_array(MYSQLI_ASSOC);

        $listID = $list['ID'];  

        echo json_encode(array('listID' => $list['ID'])); // echo niet vergeten, lis

        /* Echo the project name */
        echo '<div class="projectname" id="',$listID,'">', $projectName, '</div>';


        /* Echo the todo's associated with the selected tags */
        $i = 0;

        while ($row = $todosResult->fetch_array(MYSQLI_ASSOC)) {
        $todoID = $row['id_todo'];

        echo '<li> <label class="check-todo" id="', $todoID, '"><input type="checkbox" name="todo" class="todo-checkbox" value="' , $todoID, '> </input> <div class="todo-name">', $row['name'], '</div>',
        '<article class="todo-content">', htmlSpecialchars($row['content']),'</article>', '</label></li>';


        // Add a todo to the checklist/todo table
        $addTodo = "INSERT INTO `cnc_check_todo`(`id_todo`,`id_checklist`) VALUES ('$todoID','$listID')";
        $mysqli->query($addTodo) or die(mysql_error());

        };

?>