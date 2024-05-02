<?php
$sql = "SELECT c.categories_id FROM categories c INNER JOIN brands b ON b.categories_id = c.categories_id WHERE categories_status = 1 AND categories_active = 1";
    $result = $connect->query($sql);
    while($row = $result->fetch_array()) {
        echo $row[0];
    }
?>