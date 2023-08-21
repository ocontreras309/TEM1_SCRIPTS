<?php
    $conn = new mysqli("web-db-service", "example_user", "mysql", "example", "8306");
    $res = $conn->query("SELECT * FROM student");
    
    while ($row = $res->fetch_assoc()):
?>
<div>
    <?= $row["first_name"] ?>
</div>
<?php
    endwhile;
    $conn->close();
?>
