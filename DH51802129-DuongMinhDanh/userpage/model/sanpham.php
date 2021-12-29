<?php
include_once '../utils/MySQLUtils.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sanpham
 *
 * @author Admin
 */
class sanpham {

    //put your code here
    private $sp_id;
    private $ten_sp;
    private $gia;
    private $hinh;

    public function __construct($id, $ten, $gia, $hinh) {
        $this->sp_id = $id;
        $this->ten_sp = $ten;
        $this->gia = $gia;
        $this->hinh = $hinh;
    }

    public function getAllSp() {
        $dbcon = new MySQLUtils();
        $query = "select * from sanpham";
        $data = $dbcon->getAllData($query);
        $dbcon->disconnectDB();
        return $data;
    }

    function getSp_id() {
        return $this->sp_id;
    }

    function getTen_sp() {
        return $this->ten_sp;
    }

    function getGia() {
        return $this->gia;
    }

    function getHinh() {
        return $this->hinh;
    }

}
