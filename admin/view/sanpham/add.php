<form method="POST" action="index.php?chucnang=themsanphamtrongdanhmuc">
  <div class="mb-3">
    <h1>Thêm thú cưng</h1>
    <label for="">Id màu sắc :</label>
    <select name="id_mausac" id="">
      <option value="0">Xanh</option>
      <option value="1">Đỏ</option>
      <option value="2">Tím</option>
      <option value="3">Vàng</option>
    </select>
    <label for="">Tên :</label>
    <input type="text" class="form-control" id="" name="ten">
    <label for="">Giá :</label>
    <input type="text" class="form-control" id="" name="gia">
    <label for="">Tuổi :</label>
    <input type="number" class="form-control" id="" name="tuoi">
    <label for="">Giới tính :</label>
    <select name="gioitinh" id="">
      <option value="0">Đực</option>
      <option value="1">Cái</option>
    </select>
    <label for="">Nguồn gốc :</label>
    <input type="text" class="form-control" id="" name="nguongoc">
    <label for="">Tiêm chủng :</label>
    <select name="tiemchung" id="">
      <option value="0">Đã tiêm chủng</option>
      <option value="1">Chưa tiêm chủng</option>
    </select>
    <label for="">Số lượng :</label>
    <input type="number" class="form-control" id="" name="soluong">
    <label for="">Ghi chú :</label>
    <input type="text" class="form-control" id="" name="ghichu">
  </div>
  <button type="submit" class="btn btn-primary" name="themsanphamtrongdanhmuc">Thêm</button>
</form>