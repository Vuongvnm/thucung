<?php

// B1 lấy dữ liệu từ DB -> Giao cho model
include "model/sanpham.php";
if (isset($_GET['id'])) {
    $idDanhMuc = $_GET['id'];
    $listThuCung = layHetThuCungTheoIdDanhMuc($idDanhMuc);
}

// B2 xử lý dữ liệu -> Giao cho controller

// B3 đưa dữ liệu ra màn hình -> Giao cho view
include "view/sanpham/list.php";
