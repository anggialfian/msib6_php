<div style="height:1300px; padding: 10px;">
        <!-- Halaman Depan -->
        <?php
        $hal=$_GET['hal'];
        if(!empty($hal)){
            include_once $menu_bawah[$hal];
        }
        else {
            include_once 'home.php';
        }
        ?>
    </div>