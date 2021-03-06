<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="<?= APP_URL . 'assets/adminlte/' ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p><?php echo $_SESSION['session_name'] ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>


    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="<?= "index.php?page=dashboard" ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="<?= "index.php?page=pc-index" ?>"><i class="fa fa-bars"></i> <span>Kategori Produk</span></a></li>
        <li><a href="<?= "index.php?page=nc-index" ?>"><i class="fa fa-bars"></i> <span>Kategori Berita</span></a></li>
        <li><a href="<?= "index.php?page=product-index" ?>"><i class="fa fa-folder"></i> <span>Produk</span></a></li>
        <li><a href="<?= "index.php?page=news-index" ?>"><i class="fa fa-newspaper-o"></i> <span>Berita</span></a></li>
        <li><a href="<?= "index.php?page=video-index" ?>"><i class="fa fa-file-video-o"></i> <span>Video</span></a></li>
        <li><a href="<?= "index.php?page=sm-index" ?>"><i class="fa fa-archive"></i> <span>Sosial Media</span></a></li>
        <li><a href="<?= "index.php?page=contact-index" ?>"><i class="fa fa-phone"></i> <span>Contact Us</span></a></li>
        <li><a href="<?= "index.php?page=message-index" ?>"><i class="fa fa-envelope"></i> <span>Pesan</span></a></li>
        <li><a href="<?= "index.php?page=order-index" ?>"><i class="fa fa-shopping-cart"></i> <span>Order</span></a></li>
        <li><a href="<?= "index.php?page=user-index" ?>"><i class="fa fa-user"></i> <span>User</span></a></li>
    </ul>
</section>