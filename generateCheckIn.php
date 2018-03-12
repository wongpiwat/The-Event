
<?php //ใส่ทุกอัน
    include 'header.php';
    $date =  date("Y-m-d");
    $time =  date("H:i:s");

    <?php
    $result = $controller->getDatabase()->readEventUpTime();
    while($row = $result->fetch(PDO::FETCH_BOTH)){
        
        $statement = $controller->getDatabase()->getConnect()->prepare('SELECT * FROM `attendents` WHERE idEvent=:idEvent');
        $statement->execute(['idEvent' => $row[0]]);
        echo 'SELECT * FROM `attendents` WHERE idEvent='.$row[0];
        while($r = $statement->fetch(PDO::FETCH_BOTH)){
            $sun = $controller->getDatabase()->getConnect()->prepare('SELECT * FROM account WHERE username=:username');
            $sun->execute([':username' => $row[1]]);
            echo 'SELECT * FROM account WHERE username='.$r[1];

            while($p = $sun->fetch(PDO::FETCH_BOTH)){
               
               $p[0],$p[2],$p[3],"The Event CheckIn","CheckIn Event: "+$row[2]+" click= http://localhost:120/ProjectWebtech_1/checkIn.php?ifwn23Evewge="+$row[0]+"&xTaScDwdasfw="+$p[0]+" Thankyou.");
            
             
            }
        }
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>

<script>
</script>
    
</body>
</html>

