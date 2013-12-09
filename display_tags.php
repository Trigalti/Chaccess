<?php

    include 'scripts/db_connect.php';



    $query = "SELECT name, id FROM tags";
    $result = $mysqli->query($query);


    $i = 0;

    while ($row = $result->fetch_array(MYSQLI_ASSOC)){;  

    $tag = ucwords($row['name']);
    $tagId = ucwords($row['id']); ?>

    <label><li class="tag <?php if($i == 0){ echo 'first-child'; } ?>">
        <input id="<?php echo $tagId?>" type="checkbox" value="<?php echo $tag;?>" name="tags"><?php echo $tag; ?></input>
    </li>
    </label>

<?php   
    $i++;  
}; ?>