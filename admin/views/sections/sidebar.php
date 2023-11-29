<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <img src="<?=ADMIN_ASSETS?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <?php $avatar = getImage('user', $_SESSION['user']['id'], $_SESSION['user']['avatar']); ?>
                <img src="<?=$avatar;?>" class="img-circle elevation-2" alt="img">
            </div>
            <div class="info">
                <a class="d-block"><?=$_SESSION['user']['username'] ; ?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-header">EXAMPLES</li>
                <li class="nav-item">
                    <a href="/admin?r=menu" class="nav-link">
                        <i class="nav-icon fas fa-hamburger"></i>
                        <p>
                            Menyu
                            <span class="badge badge-info right"><?=getRowsCount('menu');?></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin?r=social" class="nav-link">
                        <i class="nav-icon fas fa-comment-dots"></i>
                        <p>
                            Social media
                            <span class="badge badge-info right"><?=getRowsCount('social_links');?></span>
                        </p>
                    </a>
                </li>
                <?php if ($_SESSION['user']['status'] >= 10): ?>
                    <li class="nav-item">
                    <a href="/admin?r=users" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Foydalanuvchilar
                            <span class="badge badge-info right"><?=getRowsCount('user');?></span>
                        </p>
                    </a>
                </li>
                <?php endif; ?>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa solid fa-film"></i>
                        <p>
                            Kino
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin?r=movie-genre" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kino Janrlari</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin?r=movie" class="nav-link">
                                <i class="fa solid fa-play nav-icon"></i>
                                <p>Kinolar</p>
                                <span class="badge badge-info right"><?=getRowsCount('movie');?></span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?=ADMIN_ASSETS?>#" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Mailbox
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?=ADMIN_ASSETS?>pages/mailbox/mailbox.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inbox</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=ADMIN_ASSETS?>pages/mailbox/compose.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Compose</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=ADMIN_ASSETS?>pages/mailbox/read-mail.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Read</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

