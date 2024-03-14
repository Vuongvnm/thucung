<a class="btn btn-primary" href="index.php?chucnang=themsanphamtrongdanhmuc&id=1"> Thêm mới </a>
<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th class="col-1" scope="col">ID</th>
      <th class="col-1" scope="col">ID màu sắc</th>
      <th class="col-1" scope="col">Tên</th>
      <th class="col-1" scope="col">Giá</th>
      <th class="col-1" scope="col">Tuổi</th>
      <th class="col-1" scope="col">Giới tính</th>
      <th class="col-1" scope="col">Nguồn gốc</th>
      <th class="col-1" scope="col">Tiêm chủng</th>
      <th class="col-1" scope="col">Số lượng</th>
      <th class="col-1" scope="col">Ghi chú</th>
      <th class="col-1" scope="col">Ngày tạo</th>
      <th class="col-1" scope="col">Chức năng</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($listThuCung as $key => $item) {
    ?>
      <tr>
        <td><?= $item['id'] ?></td>
        <td><?= $item['id_mausac'] ?></td>
        <td><?= $item['ten'] ?></td>
        <td><?= $item['gia'] ?> VND</td>
        <td><?= $item['tuoi'] ?></td>
        <td><?= $item['gioitinh']?'Cái':'Đực' ?></td>
        <td><?= $item['nguongoc'] ?></td>
        <td><?= $item['tiemchung']?'Đã tiêm chủng':'Chưa tiêm chủng' ?></td>
        <td><?= $item['soluong'] ?></td>
        <td><?= $item['ghichu'] ?></td>
        <td><?= $item['ngaytao'] ?></td>
        <td><a class="btn btn-warning" href="index.php?chucnang=suatrongdanhmuc&id=<?=$item['id']?>">Sửa</a>
            <a class="btn btn-warning" href="index.php?chucnang=xoatrongdanhmuc&id=<?=$item['id']?>">Xóa</a>
          </td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>
