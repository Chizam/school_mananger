<?php
require("");

$select_from = $db->prepare("SELECT * FROM students WHERE id=:id");
            $select_from->execute([':id'=>$_SESSION['userid']]);
            $result = $select_from->fetch(PDO::FETCH_OBJ);

            if(kk){}


?>


