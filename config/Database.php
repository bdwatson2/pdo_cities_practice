<?php 
    class Database {
        private $host = 'j21q532mu148i8ms.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
        private $db_name = 'o9jmvxv9m4v59udl';
        private $username = 'ezkkogqie6ebtp32';
        private $my_env_password = getenv('DATA_PASS');
        private $conn;

        public function connect() {
            $this->conn = null;

            try {
                $this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->db_name, $this->username, $this->my_env_password); 
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                $error_message = 'Database Error: ';
                $error_message .= $e->getMessage();
                echo $error_message;
                exit('Unable to connect to the database');
            }
            return $this->conn;
        }
    }