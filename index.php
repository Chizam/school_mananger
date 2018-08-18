<?php



?>
<!DOCTYPE html>
<html>
<head>
	<title>sign up</title>
     <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    
	
</head>
<body class="body_design">
    <div>
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
                		
                		<input type="text" name="add" class="form-control">
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
            	
            		<select name="gender" class="form-control">
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
            		
            		<select class="form-control" name="Position">
            			
            			<option value="Admin">Admin</option>
            			<option value="Staff"> Staff</option>
            			<option value="Student"> Student</option>
            			
            		</select>
             </div>
    	
    
    	       <input type="submit" name="create" value="create account" class="btn btn-success">
    	
            <p>already have an account then <a href="login.php" class="enter" > Login</a> </p> 
    
            </form>
        </div>
    
    
    </div>
</body>
</html>