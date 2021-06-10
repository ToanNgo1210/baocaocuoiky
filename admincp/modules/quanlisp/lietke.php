<?php
    $sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
    $query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
?>

<p> liệt kê danh mục sản phẩm </p>
<table border = "1" width = "100%" style="border-collapse: collapse;">
  <tr>
    <th>ID</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Giá sp</th>
    <th>Số lượng</th>
    <th>Danh mục</th>
    <th>Mã sp</th>
    <th>Tóm tắt</th>
    <th>Trạng thái</th>
    <th>Quản lí</th>
  </tr>
  <?php
    $i =0;
    while($row = mysqli_fetch_array($query_lietke_sp)){
        $i++;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['tensanpham'] ?></td>
    <td><img src="modules/quanlisp/uploads/<?php echo $row['hinhanh'] ?>"width="150px"></td>
    <td><?php echo $row['giasp'] ?></td>
    <td><?php echo $row['soluong'] ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td><?php echo $row['masp'] ?></td>
    <td><?php echo $row['tomtat'] ?></td>
    <td><?php if($row['tinhtrang']==1){
      echo 'Kích hoạt';
    }else{
      echo 'Ẩn';
    } 
    ?></td>
    <td>
        <a href= "modules/quanlisp/xuli.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xoá</a> | 
        <a href="?action=quanlisp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a>  
    </td>
  </tr>
  <?php
    }
  ?>

</table>