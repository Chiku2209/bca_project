<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.php"><img src="img/lg.png" height="50px" width="65px" alt="Nike"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        <?php
                            if(isset($_SESSION['uname']))
                            {
                                include_once('Admin/include/config.php');
                                $qry = "SELECT * FROM members WHERE username='".$_SESSION['uname']."'";
                                $res = mysqli_query($conn, $qry);
                                $row1 = mysqli_fetch_row($res);

                                ?> <li class="nav-item"><a class="nav-link" href="profile.php?id=<?php echo $row1[0]; ?>"><?php echo $_SESSION['uname'] ?></a></li>
                                   <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li> <?php
                            }
                            else{
                               ?> <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li> <?php
                            }
                        ?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item">
                            <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container">
            <form class="d-flex justify-content-between">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>