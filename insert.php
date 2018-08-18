<?php
session_start();
require_once('config.php');

 error_reporting(E_ALL);
  //ini_set('error_reporting', E_ALL);
  ini_set('display_errors', '1');

class data_insert{
    public $userExist , $newUser, $account,$link;
    protected $db;


    function __construct()
    {
        $this->db = DB();
    }
 
    function __destruct()
    {
        $this->db = null;
    }

    public function enter(){
		   //echo $this->db;
			//if (isset($_POST['create'])) {
    // confirm user doesn't exist
      $sql_qry = "SELECT * FROM students WHERE email = :email OR password = :password LIMIT 1";
      $this->userExist =  $this->db->prepare($sql_qry);
        //echo"1fgkk<br>";
      $this->userExist->execute([":email" => $_POST['email'], ":password" => $_POST['pword'],]);
      if (sizeof($this->userExist->fetchAll())< 1) {
      // user doesn't exist, create new one
        //print_r($_POST);//die();
            try
            {
                //PDOStatement->execute();
                //record inserted
                //print_r($this->configure()) ;die();
                 $this->newUser = $this->db->prepare("INSERT INTO students (surname, othername, address,
                 email, password, gender, subject_handeled, position) 
                 VALUES (:surname,:othername, :address, :email, :password, :gender, :subject_handeled, :position)");
                
                 $this->newUser->bindParam(':surname',$_POST['surname'],PDO::PARAM_STR);
                 $this->newUser->bindParam(':othername', $_POST['othername'],PDO::PARAM_STR);
                 $this->newUser->bindParam(':address' ,$_POST['add'],PDO::PARAM_STR);
                 $this->newUser->bindParam(':email', $_POST['email'],PDO::PARAM_STR);
                  //$d_password =  password_hash($_POST['pword'], PASSWORD_DEFAULT);
                 $this->newUser->bindParam(':password',$_POST['pword'],PDO::PARAM_STR);
                
                 $this->newUser->bindParam(':gender' ,$_POST['gender'],PDO::PARAM_STR);
                 $this->newUser->bindParam(':subject_handeled' ,$_POST['sub'],PDO::PARAM_STR);
                 $this->newUser->bindParam(':position', $_POST['Position'],PDO::PARAM_STR);
                 
                 $this->newUser->execute();
                //die("stop for awile gg");
                // echo"bgrecord saved<br>";die();
                 echo "<script> alert('record saved') </script>";
            }
            catch(PDOException $e){
                die('Db connection error' . $e->getMessage());
            }
        //print_r($this->newUser);die();
       
            if ($this->newUser) {
           
              // user created, redirect to login page
                header('Location: login.php');
                echo "<script> alert('record saved') </script>";
            } 
            else {
                header('Location: index.php?created=false');
                return;
            }
      }
      else {
        header('Location: index.php?userExist=true');
        return;
      }

  //}
    }
        
    public function login(){
                // fetch account with username 
               
      $this->link =  $this->db->prepare("SELECT * FROM students WHERE email = :email AND password= :password LIMIT 1");
      $this->link->execute([":email" => $_POST['mail'],  ":password" => $_POST['password']]);
      if ($this->link) {
    
        // compare hash with password
        // PDO::FETCH_OBJ -> sets the fetch method, to fetch the rows as objects
        $acct = $this->link->fetch(PDO::FETCH_OBJ);
      
          //if (password_verify($_POST['password'], password_hash($_POST['password'], PASSWORD_DEFAULT))){
          // password match, redirect to dashboard.
        $_SESSION['userid'] = $acct->id;
          
        header('Location: dashboard.php'); 
        //}
      } 
      else {
    
        header('Location: login.php?err=true');
      }
    } 
    
    
    public function add(){
		   //echo $this->db;
			//if (isset($_POST['create'])) {
    // confirm user doesn't exist
      $sql_qry = "SELECT * FROM students WHERE email = :email OR password = :password LIMIT 1";
      $this->userExist =  $this->db->prepare($sql_qry);
        //echo"1fgkk<br>";
      $this->userExist->execute([":email" => $_POST['email'], ":password" => $_POST['pword'],]);
      if (sizeof($this->userExist->fetchAll())< 1) {
      // user doesn't exist, create new one
        //print_r($_POST);//die();
            try
            {
                //PDOStatement->execute();
                //record inserted
                //print_r($this->configure()) ;die();
                 $this->newUser = $this->db->prepare("INSERT INTO students (surname, othername, address,
                 email, password, gender, subject_handeled, position) 
                 VALUES (:surname,:othername, :address, :email, :password, :gender, :subject_handeled, :position)");
                
                 $this->newUser->bindParam(':surname',$_POST['surname'],PDO::PARAM_STR);
                 $this->newUser->bindParam(':othername', $_POST['othername'],PDO::PARAM_STR);
                 $this->newUser->bindParam(':address' ,$_POST['address'],PDO::PARAM_STR);
                 $this->newUser->bindParam(':email', $_POST['email'],PDO::PARAM_STR);
                  //$d_password =  password_hash($_POST['pword'], PASSWORD_DEFAULT);
                 $this->newUser->bindParam(':password',$_POST['pword'],PDO::PARAM_STR);
                
                 $this->newUser->bindParam(':gender' ,$_POST['gender'],PDO::PARAM_STR);
                 $this->newUser->bindParam(':subject_handeled' ,$_POST['sub'],PDO::PARAM_STR);
                 $this->newUser->bindParam(':position', $_POST['Position'],PDO::PARAM_STR);
                 
                 $this->newUser->execute();
                //die("stop for awile gg");
                // echo"bgrecord saved<br>";die();
                 echo "<script> alert('record saved') </script>";
            }
            catch(PDOException $e){
                die('Db connection error' . $e->getMessage());
            }
        
       
            if ($this->newUser) {
                 echo "<script> alert('record saved') </script>";
           
              // student created, remain in add student page
              $dd = $this->newUser->fetch(PDO::FETCH_OBJ);
             $_SESSION['userid'] = $dd->id;
             
                header('Location:add.php');
               // echo "<script> alert('record saved') </script>";
            } 
           else {
             
                header('Location:add.php?created=false');
                return;
            }
      }
      //else {
        //header('Location: signup.php?userExist=true');
        //return;
      //} 

  //}
    }
}

?>