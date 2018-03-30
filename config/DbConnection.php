<?php
    class DbConnection{
        private static $db_host = 'localhost';
        private static $db_user = 'root';
        private static $db_pass = '';
        private static $db_name = 'proyectopastoral';
        private static $db_charset= 'utf8';
        private $conn;
        public $query;

        private function db_open(){
            $this->conn = new mysqli(
                self::$db_host,
                self::$db_user,
                self::$db_pass,
                self::$db_name
            );
            
            $this->conn->set_charset(self::$db_charset);
        }

        private function db_close(){
            $this->conn->close();
        }

        public function set_query(){
            $this->db_open();
            $return = $this->conn->query($this->query);
            $this->db_close();

            return $return;
        }

        public function get_query(){
            $rows = array();

            $this->db_open();
            $result = $this->conn->query($this->query);
            while( $rows[] = $result->fetch_assoc());
            $result->close();
            $this->db_close();

            unset($rows[count($rows) - 1]);
            return $rows;
        }

        public function get_error(){
            return $this->conn->connect_error;
        }

        public function call_sp($name,$parameters){
            $query = 'CALL '.$name.'(';
            foreach ($parameters as $parameter) {
                $query = $query."'".$parameter."'".",";
            }
            $query = substr($query, 0, -1).")";

            $this->query =  $query;
        }
    }