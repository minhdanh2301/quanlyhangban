<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MySQLUtils
 *
 * @author Admin
 */
class MySQLUtils {
    //put your code here
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private static $conn;

    public function __construct() {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "qlbanhang";
        if (self::$conn == null) {

            $this->connectDB();
        }
        return self::$conn;
    }

    public function __destruct() {
        $this->servername = "";
        $this->username = "";
        $this->password = "";
        $this->dbname = "";
        self::$conn = null;
    }

    //put your code here
    private function connectDB() {
        try {
            self::$conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            // set the PDO error mode to exception
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return self::$conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function disconnectDB() {

        self::$conn = null;
    }

    public function insertData($query, $param = array()) {
        $stmt = self::$conn->prepare($query);
        $stmt->execute($param);
    }

    public function getAllData($query) {
        $stmt = self::$conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getData($query, $param = array()) {
        $stmt = self::$conn->prepare($query);
        $stmt->execute($param);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function UpdateData($query, $param = array()) {
        $stmt = self::$conn->prepare($query);
        $stmt->execute($param);
        return $stmt->rowCount();
    }

    public function DeleteData($query, $param = array()) {
        $stmt = self::$conn->prepare($query);
        $stmt->execute($param);
        return $stmt->rowCount();
    }

}
