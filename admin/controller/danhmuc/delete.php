<?php
include "model/danhmuc.php";
    $id = $_GET['id'];
    xoa_mot_danhmuc($id);
header('Location: index.php?chucnang=listdanhmuc');

?>