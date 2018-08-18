<?php
session_start(); 
require_once('config.php');
$db= DB();
//require_once('file.php');
if (!isset($_SESSION['userid'])) {
  header('Location: index.php');
  return;
}

//$_SESSION['userid'] = $acct->id;
$data = $db->prepare("SELECT * FROM students WHERE id = :id LIMIT 1");
$data->execute([":id" => $_SESSION['userid']]);
$userdata = $data->fetch(PDO::FETCH_OBJ); 



?>

<!DOCTYPE html>
<head>
<title> dashboard</title>
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container-fluid">
    <div class="col" >
         <h3 class="text-center"> You are logged in as <?= $userdata->surname . " ". $userdata->othername ?> </h3>

    </div>
        <div class="row">
        
    
            <div class="col-md-2">
            <?php
            $select_from = $db->prepare("SELECT * FROM students WHERE id=:id");
            $select_from->execute([':id'=>$_SESSION['userid']]);
            $result = $select_from->fetch(PDO::FETCH_OBJ);
            if($result){
                //echo $result->position; die();
                if($result->position == "Student"){?>
                    <ul>
                     <li class="bg-success"> <h3> <?=  $userdata->position; ?></h3></li> <br />
                    <li><a href="#">General timetable </a></li>
                    <li><a href="#">teachers schedule </a></li>
                    <li><a href="logout.php">Log Out </a></li>
                    </ul>

               <?php }

               else if($result->position == "Staff"){?>

                    <ul>
                     <li> <h3> <?=  $userdata->position; ?></h3></li> <br />
                    <li><a href="#">Students attendance/list </a></li> 
                    <li><a href="#">teachers attendance/list </a></li> 
                    <li><a href="#">General timetable </a></li>
                    <li><a href="#">My Class schedule </a></li>
                    <li><a href="#"> My class list </a></li>
                    <li><a href="logout.php">Log Out </a></li>
                    
                    </ul>
              <?php }
              else{ ?>
              

                <ul>
                     <li> <h3> <?=  $userdata->position; ?></h3></li> <br />

                    <li><a href="timetable.php">General timetable </a></li>
                   
                    <li><a href="file.php">All class list </a></li>
                    <li><a href="add.php">Add New student </a></li>
                    <li><a href="logout.php">Log Out </a></li>
                    </ul>
              <?php }
            } ?>
                

            </div>
    
    
            <div class="col-md-8">
            <div>
            <h2> personal Data </h2> </div><br>


            <h3>Surname: <?= $userdata->surname;?></h3>
            <h3>Othernames: <?= $userdata->othername;?></h3>
            <h3>Address: <?= $userdata->address;?></h3>
            <h3>Email: <?= $userdata->email;?></h3>
            <h3>Gender: <?= $userdata->gender;?></h3>
            
            </div>
    </div>
</div>
</body>
</html>