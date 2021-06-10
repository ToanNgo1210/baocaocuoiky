<div class = "clear"></div>
<div clas = "main">
    <?php
                    if(isset($_GET['action']) && $_GET['query']){
                        $tam = $_GET['action'];
                        $query = $_GET['query'];
                    }else{
                        $tam = '';
                        $query='';
                    }
                    if($tam=='quanlidanhmucsanpham' && $query=='them'){
                        include("modules/quanlidanhmucsp/them.php");
                        include("modules/quanlidanhmucsp/lietke.php");
                    }elseif ($tam=='quanlidanhmucsanpham' && $query=='sua') {
                        include("modules/quanlidanhmucsp/sua.php");
                    }elseif ($tam=='quanlisp' && $query=='them') {
                        include("modules/quanlisp/them.php");
                        include("modules/quanlisp/lietke.php");
                    }elseif ($tam=='quanlisp' && $query=='sua') {
                        include("modules/quanlisp/sua.php");
                    }elseif ($tam=='quanlidonhang' && $query=='lietke') {
                        include("modules/quanlidonhang/lietke.php");
                    }elseif ($tam=='donhang' && $query=='xemdonhang') {
                        include("modules/quanlidonhang/xemdonhang.php");
                    }
                    else{
                        include("modules/dashboard.php"); 
                    }
    ?>
</div>