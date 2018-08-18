<?php 


session_start(); 
require_once('config.php');
$db= DB();
//require_once('file.php');
if (!isset($_SESSION['userid'])) {
  header('Location: index.php');
  return;
}


    $sql ="SELECT * FROM students WHERE position = 'student' ORDER BY surname ASC";
   
        
?>


<html>
    <body>
     <button style="float: right;"><a href="dashboard.php"> Back To Dashboard </a></button> 
    <head>
        <title> Students List</title>
        
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
     <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
        <table>
            <thead>
                <tr>
                    <th> SURNAME</th>
                    <th> OTHERNAMES</th>
                    <th> GENDER</th>
                    <th> ADDRESS</th>
                    <th> ACTION</th>
                </tr>
            </thead>
            <?php  foreach ($db->query($sql) as $row) { ?>
             <tbody>
              <tr>
             <td>  <?= $row['surname'];?></td>
              <td>  <?=  $row['othername'] ;?></td>
               <td>  <?= $row['gender'] ;?></td>
                <td>  <?= $row['address'] ;?></td>
                <td>  <a href="update.php ?id=<?=$row['id']?>"> Update</a>  </a> <a href="Delete.php ?id=<?=$row['id']?>"> Delete</a> </td>
               </tr>
    <?php }
//}?>
            </tbody>
           
            

        </table>

    </body>

</html>