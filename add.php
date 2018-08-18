<?php

session_start(); 
require_once('config.php');

if (!isset($_SESSION['userid'])) {
  header('Location: index.php');
  return;
}
?>

<html>
<head>
<title> Add New Student </title>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>


<body class="body_design">
<button style="float: right;"><a href="dashboard.php"> Back To Dashboard </a></button>
    <div class="text-center card-view ">
            <form action="views.php" name="register" method="post">
                <div class="form-group">
                	<label for="Surname">Surname: </label>
                		<input type="text" name="surname" class="form-control">
                </div>
    	
                <div class="form-group">
                	<label for="Othernames"> Other Names: 	</label>
                		<input  type="text" name="othername" class="form-control">
                </div>
    
                <div class="form-group">
                	<label for="address"> Address:</label>
                		
                		<input type="text" name="address" class="form-control">
               	</div>
    
                <div class="form-group">
                    	<label for=" email"> Email:</label>
                    		
                   		   <input  type="email" name="email" class="form-control">
               	</div>
        
    
                <div class="form-group">
                	<label for="password"> Password: </label>
                		<input type="Password" name="pword" class="form-control">
                </div>
    
                <div class="form-group">
            	   <label for="gender"> Gender: </label>
            	
            		<select class="form-control" name="gender">
            			<option value="Male"> Male</option>
            			<option value="Female"> Female</option>
            		</select>
                </div>
            	
                <div class="form-group">
            	   <label for="subject"> Subject Taught: </label>
            		
            		<select   name="sub" class="form-control">
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
            		
            		<select  name="Position" class="form-control">
            			
            			<option value="Admin">Admin</option>
            			<option value="Staff"> Staff</option>
            			<option value="Student"> Student</option>
            			
            		</select>
             </div>
    	
    
    	       <input type="submit" name="add" value="Add Student" class="btn btn-success">
    	
    
            </form>
        </div>
</body>

</html>