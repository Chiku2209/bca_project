<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="https://www.nike.com/in/launch?s=in-stock" class="brand-link">
        <img src="dist/img/adminpanel/adminsidebarlogo.jpeg" alt="Nike LOGO" class="brand-image elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">&nbsp;Nike SNKRS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" id="grad1">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="profile.php" class="d-block">&nbsp;<?php echo $_SESSION['name']; ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="dashboard.php" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <?php
                include('include/config.php');
                $Nam = "SELECT * FROM products";
                $NAm = mysqli_query($conn, $Nam);
                $NAM = mysqli_num_rows($NAm);
                ?>
                <li class="nav-item">
                    <a href="product.php" class="nav-link">
                        <i class="nav-icon fa-solid fa-p"></i>
                        <p>
                            Product
                            <span class="badge badge-info right"><?php echo $NAM; ?></span>
                        </p>
                    </a>
                </li>
                <?php
                include_once('include/config.php');
                $slider = "SELECT * FROM slider";
                $sli = mysqli_query($conn, $slider);
                $res = mysqli_num_rows($sli);
                ?>
                <li class="nav-item">
                    <a href="slider.php" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Slider
                            <span class="badge badge-info right"><?php echo $res ?></span>
                        </p>
                    </a>
                </li>
                <?php
                $sliderr = "SELECT * FROM orders";
                $slid = mysqli_query($conn, $sliderr);
                $res3 = mysqli_num_rows($slid);
                ?>
                <li class="nav-item">
                    <a href="order.php" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            order
                            <span class="badge badge-info right"><?php echo $res3 ?></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="user.php" class="nav-link">
                        <i class="nav-icon fa-solid fa-users"></i>&nbsp;
                        <p>
                            Members
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>