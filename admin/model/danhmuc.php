<?php
include "model/pdo.php";
function lay_danhmuc_tudb() {
    $sql = "SELECT * FROM danhmuc";
    return pdo_query($sql);
}

function them_mot_danhmuc($ten) {
    $sql = "INSERT INTO danhmuc (tendanhmuc) VALUES ('$ten')";
    pdo_execute($sql);
}

function xoa_mot_danhmuc($id) {
    $sql = "DELETE FROM danhmuc WHERE id = '$id'";
    pdo_execute($sql);
}
?>