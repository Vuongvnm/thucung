<?php
include "model/pdo.php";
function layHetThuCungTheoIdDanhMuc($id) {
    $sql = "SELECT * FROM thucung WHERE id_danhmuc = $id";
    return pdo_query($sql);
}
function XoaThuCung($id) {
    $sql = "DELETE FROM thucung WHERE id = $id";
    return pdo_query($sql);
}
?>