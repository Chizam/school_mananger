<?php
//session_start();
//class connect{
	
		//private $host="localhost";
		// private $user="root";
		// private $db="school_mananger";
		// private $pass="";
		// private $conn;
		/*public $data= "mysql:dbname=school_mananger;host=127.0.0.1";
		public $user = "root";
		public $password = "";*/
// 		public function __construct(){
		
// 		 $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db,$this->user,$this->pass);

// 	}
// } 

define('HOST', 'localhost'); // Database host name ex.localhost
define('USER', 'root'); // Database user. ex. root ( if your on local server)
define('PASSWORD', ''); // Database user password  (if password is not set for user then keep it empty )
define('DATABASE', 'greatdb'); // Database name
define('CHARSET', 'utf8');
 
function DB()
{
    static $instance;
    if ($instance === null) {
        $opt = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => FALSE,
        );
        $dsn = 'mysql:host=' . HOST . ';dbname=' . DATABASE . ';charset=' . CHARSET;
        $instance = new PDO($dsn, USER, PASSWORD, $opt);
    }
    return $instance;
}



?>