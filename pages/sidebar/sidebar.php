<div class="sidebar">
                <ul class = "list_sidebar">
                <?php
                        $sql_danhmuc = "SELECT *FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                        $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                        while($row = mysqli_fetch_array($query_danhmuc)){
                ?>
                        <li><a href = "index.php?quanli=danhmucsanpham&id=<?php echo $row['id_danhmuc']?>"><?php echo $row['tendanhmuc']?></a></li>
                <?php
                }
                ?>
<!-- 
                        <li><a href = "index.php?quanly=danhmucsanpham&id=2"> SAMSUNG</a></li>
                        <li><a href = "index.php?quanly=danhmucsanpham&id=3"> XIAOMI</a></li>
                        <li><a href = "index.php?quanly=danhmucsanpham&id=4"> NOKIA</a></li>
                        <li><a href = "index.php?quanly=danhmucsanpham&id=5"> OPPO</a></li> -->
                </ul> 
            </div>