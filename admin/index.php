<?php
include "view/header.php";
//ROUTING
if ($_GET == []) {
    include "view/admin.php";
} else {
    if(isset($_GET['chucnang'])){
        $chucNang = $_GET['chucnang'];
        switch($chucNang) {
            case 'listdanhmuc':
                include "controller/danhmuc/list.php";
                break;
            case 'themdanhmuc':
                include "controller/danhmuc/add.php";
                break;
            case 'chitietdanhmuc':
                include "controller/sanpham/list.php";
                break;
            case 'xoadanhmuc':
                include "controller/danhmuc/delete.php";
                break;
            case 'themsanphamtrongdanhmuc':
                include "controller/sanpham/add.php";
                break;
            
        }
    }
}
include "view/footer.php";

?>
