
<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th class="col-2" scope="col">#</th>
      <th class="col-3" scope="col">ID</th>
      <th class="col-5" scope="col">Tên danh mục</th>
      <th class="col-2" scope="col">Chức năng</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($listDanhMuc as $key => $item) {
    ?>
      <tr>
        <th><?= ++$key ?></th>
        <td><?= $item['id'] ?></td>
        <td><?= $item['tendanhmuc'] ?></td>
        <td>
          <a class="btn btn-warning" href="index.php?chucnang=chitietdanhmuc&id=<?=$item['id'] ?>">Chi tiết</a>
          <a class="btn btn-warning" href="index.php?chucnang=xoadanhmuc&id=<?=$item['id'] ?>">Xóa</a>  
        </td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>
<a class="btn btn-primary" href="index.php?chucnang=themdanhmuc"> Thêm mới </a>