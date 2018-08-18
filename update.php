<?php
session_start(); 
require_once('config.php');
$db= DB();

if (isset($_POST['edit'])){  
//$id = $_SESSION['userid'];
$id= $_POST['id'];
$surname = $_POST['surname'];
$othername = $_POST['othername'];
$email = $_POST['email'];
$address = $_POST['adds'];
$password = $_POST['pword'];
$gender = $_POST['gender'];
$position = $_POST['position'];
$subject = $_POST['sub'];

//$id= (isset($_GET['id']) && !empty($_GET['id']))? $_GET['id']:"";


	$user_edit= $db->prepare("UPDATE students SET surname=:surname, othername=:othername ,email=:email, password=:password, address=:address,
    gender=:gen, subject_handeled=:sub, position=:position  WHERE id=:id");
    
	$reslt = $user_edit->execute(array('surname' =>$surname , 'othername'=>$othername, 'email' =>$email, 'password' =>$password, 'address' =>$address, 
    'gen' =>$gender, 'position' =>$position, 'sub' =>$subject, 'id' =>$id));

	if($user_edit){
        echo "<script> alert('updated successfully') </script>";
		header('location:dashboard.php');
		//$user = $user_edit->fetch(PDO::FETCH_OBJ);
	}

}

$id2= "";
$surname2 = "";
$othername2 = "";
$email2 = "";
$address2 = "";
$password2 = "";
$gender2 = "";
$position2 = "";
$subject2 = "";


if (isset($_GET['id'])){
	$id= $_GET['id'];
	$dbase =$db->prepare("SELECT * FROM students WHERE id= :id LIMIT 1");
	$dbase->execute(array(':id' => $id));
	//$dbase->execute([":id" => $_SESSION['userid']]);
	$row = $dbase->fetch(PDO::FETCH_OBJ);
    
	$id2= $row->id;
	$surname2= $row->surname;
	$othername2= $row->othername;
	$email2 = $row->email;
    $address2 = $row->address;
    $password2 = $row->password;
    $gender2 = $row->gender;
    $position2 = $row->position;
    $subject2 = $row->subject_handeled;
    
    



}
 ?>
 
 <!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
     <link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
     <div class="text-center card-view ">
            <form action="<?= $_SERVER['PHP_SELF'];?>"  name="register" method="post">
                <div class="form-group">
                	<label for="Surname">Surname: </label>
                		<input type="text" name="surname" value="<?php echo $surname2 ; ?>" class="form-control">
                </div>
                 <div class="form-group">
                	
                		<input type="hidden" name="id" value="<?=$_GET['id']; ?>" class="form-control">
                </div>
    	
                <div class="form-group">
                	<label for="Othernames"> Other Names:</label>
                		<input  type="text" name="othername" value="<?php echo $othername2 ; ?>" class="form-control">
                </div>
    
                <div class="form-group">
                	<label for="address"> Address:</label>
                		
                		<input type="text" name="adds" value="<?php echo $address2 ; ?>" class="form-control">
               	</div>
    
                <div class="form-group">
                    	<label for=" email"> Email:</label>
                    		
                   		   <input  type="email" name="email" value="<?php echo $email2 ; ?>" class="form-control">
               	</div>
        
    
                <div class="form-group">
                	<label for="password"> Password: </label>
                		<input type="Password" name="pword" class="form-control">
                </div>
    
                <div class="form-group">
            	   <label for="gender"> Gender: </label>
            	
            		<select name="gender"  class="form-control">
            			<option value="Male"> Male</option>
            			<option value="Female"> Female</option>
            		</select>
                </div>
            	
                <div class="form-group">
            	   <label for="subject"> Subject Taught: </label>
            		
            		<select class="form-control"  name="sub">
            			<option value="Mathematics"> Mathematics</option>
            			<option value="English"> English</option>
            			<option value="Chemistry"> Chemistry</option>
            			<option value="Biology"> Biology</option>
            			<option value="Agricultural Science"> Agricultural Science</option>
            			<option value="Economics"> Economics</option>
            			<option value="Physics"> Physics</option>
            			<option value="Religious Studies"> Religious Studies</option>
            			<option value="None"> None</option>
            		</select>
              </div>
    
    	
            <div class="form-group">
            	<label for="position"> Position: </label>
            		
            		<select class="form-control" name="position">
            			
            			<option value="Admin">Admin</option>
            			<option value="Staff"> Staff</option>
            			<option value="Student"> Student</option>
            			
            		</select>
             </div>
    	
    
    	       <input type="submit" name="edit" value="Update Record" class="btn btn-success">
    	
    
            </form>
        </div>

</body>
</html>