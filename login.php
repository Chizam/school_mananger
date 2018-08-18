<?php

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
<body style="background-image: url('pic3.jpg');">
<div class="text-center card-view">
    <h4> login</h4>

<?php 
    if(isset($_GET['err']) && $_GET['err'] == 'true'):
?>
    <h3 style="color: red"><i>An error occurred, while logging into your account</i></h3>
<?php 
    endif;
?>

<form action="views.php" name="for" method="post">
    <div class="form-group">
	<label>email</label>
		
		<input type="text"  class="form-control" name="mail">
	</div>
	
    <div class="form-group">
	<label>password </label>
		
		<input  class="form-control" type="password" name="password">
	</div>
    
    <input  type="submit" name="log" class="btn btn-success" value="login"/>
</form>
</div>
</body>
</html>