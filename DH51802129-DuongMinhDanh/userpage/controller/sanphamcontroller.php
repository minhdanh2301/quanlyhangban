<?php
include_once '../model/sanpham.php';

class sanphamcontroller{

    public function getAllSp($sp) {
        return $sp->getAllSp();
    }

}

?>

