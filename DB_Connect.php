<?php
/**
 * @author Ravi Tamada
 * @link http://www.androidhive.info/2012/01/android-login-and-registration-with-php-mysql-and-sqlite/ Complete tutorial
 */
 require_once 'Config.php';
class DB_Connect {
    private $conn;

    // Connecting to database
    public function DB_Connect() {
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    }
    public function select_query($sql){
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            return $result->fetch_assoc();
        } else {
            return array();
        }
    }
    public function insert_query($sql){
    	$result = $this->conn->query($sql);
    	if ($result) {
    	    return true;
    	} else {
    	    return false;
    	}
    }
}

?>
