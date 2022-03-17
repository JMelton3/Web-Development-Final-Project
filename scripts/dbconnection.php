<?php

    class DbConnection{

        private $DB_HOST = 'localhost';
        private $DB_NAME = 'vehicle_db';
        private $DB_USERNAME = 'root';
        private $D_PASSWORD = '';

        private $dbh;

        public $conn;

        public function __construct(){

            $dsn = 'mysql:host=' . $this->DB_HOST . ';dbname=' . $this->DB_NAME;

            try{
                $this->conn = new PDO($dsn, $this->DB_USERNAME. $this->DB_PASSWORD);
                $this->conn->setAttribute(PDO:ATTR_DEFAULT_FETCH_MODE, PDO::FERCH_OBJ);
            }catch(PDOException $e){
                if($e){
                    echo "There was a problem with your connection. Please try again";
                }
            }
        }

        public function getConnection(){
            return $this->conn;
        }
    }   