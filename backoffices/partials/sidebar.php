<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="<?= APP_URL . 'assets/adminlte/' ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>Alexander Pierce</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>


    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="<?= "index.php?page=dashboard" ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="<?= "index.php?page=pc-index" ?>"><i class="fa fa-dashboard"></i> <span>Kategori Produk</span></a></li>
        <li><a href="<?= "index.php?page=nc-index" ?>"><i class="fa fa-dashboard"></i> <span>Kategori Berita</span></a></li>
        <li><a href="<?= "index.php?page=product-index" ?>"><i class="fa fa-dashboard"></i> <span>Produk</span></a></li>
    </ul>
</section>