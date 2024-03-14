<?php

// B1 lấy dữ liệu từ DB -> Giao cho model


// B2 xử lý dữ liệu -> Giao cho controller

// B3 đưa dữ liệu ra màn hình -> Giao cho view
if(!isset($_POST['themsanphamtrongdanhmuc'])) {
    include "view/sanpham/add.php";
} else {
    include "model/sanpham.php";
    // B1 Lấy dữ liệu từ người dùng, xử lý dữ liệu -> Giao cho controller
    if(isset($_POST['id'])) {
        $id_danhmuc = $_POST['id'];
        $id_mausac = $_POST['id_mausac'];
        $ten = $_POST['ten'];
        $gia = $_POST['gia'];
        $tuoi = $_POST['tuoi'];
        $gioitinh = $_POST['gioitinh'];
        $nguongoc = $_POST['nguongoc'];
        $tiemchung = $_POST['tiemchung'];
        $soluong = $_POST['soluong'];
        $ghichu = $_POST['ghichu'];
        // B2 Cập nhật dữ liệu vào DB -> GIao cho model
        them_mot_sanpham($id_mausac,$id_danhmuc,$ten,$gia,$tuoi,$gioitinh,$nguongoc,$tiemchung,$soluong,$ghichu);
    }
    header('Location: index.php?chucnang=chitietdanhmuc');
}
