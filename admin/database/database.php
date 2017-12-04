<?php

class DB {
    
    private $server_name;
    private $username;
    private $password;
    private $db_name;
    
    private $pdo;
    
    public function __construct($server_name, $username, $password, $db_name) {
        $this->server_name = $server_name;
        $this->username = $username;
        $this->password = $password;
        $this->db_name = $db_name;
        
        $this->pdo = new PDO("mysql:host=$this->server_name;dbname=$this->db_name", $this->username, $this->password);
    }
    
    public function get_var2($sql) {
        if(isset($sql)) {
            $result = $this->pdo->query($sql);
            
            $data = $result->fetch();
            return $data;
        }
    }
    
    public function get_row($sql) {
        if(isset($sql)) {
            $result = $this->pdo->query($sql);
            
            $data = $result->fetch();
            return $data;
        }
    }
    
    public function get_results($sql) {
        if(isset($sql)) {
            $result = $this->pdo->query($sql);
            
            $data = array();
            while($array = $result->fetch()) {
                array_push($data, $array);
            }
            return $data;
        }
    }
    
    public function insert($sql) {
        if(isset($sql)) {
            $result = $this->pdo->query($sql);
            $result->execute();
        }
    }
    
    public function delete_table($sql) {
        if(isset($sql)) {
            $result = $this->pdo->query($sql);
            $result->execute();
        }
    }
}