<?php 
    abstract class Database{
        protected $conn = null;
        protected $sql = null;
        protected $stmt = null;

        public function __construct()
        {
            try{
                $this->conn = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';',DB_USER,DB_PWD);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // SET NAMES utf8

                $this->sql = "SET NAMES utf8";
                $this->stmt = $this->conn->prepare($this->sql);
                $this->stmt->execute();
                
            } catch(PDOException $e){
                // 2019-06-12 12:10 PM: connection, PDO exception
                $msg = date('Y-m-d h:i A').": Connection (PDO), ".$e->getMessage()."\r\n";
                error_log($msg, 3, ERROR_LOG);
                return false;
            } catch(Exception $e){
                // 2019-06-12 12:10 PM: connection, PDO exception
                $msg = date('Y-m-d h:i A').": Connection (General), ".$e->getMessage()."\r\n";
                error_log($msg, 3, ERROR_LOG);
                return false;
            }
        }
    }