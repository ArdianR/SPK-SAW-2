<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="profile">
            <div class="profile_pic">
                <img src="<?php echo base_url(); ?>assets/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Selamat Datang</span>
                <h2><?php echo $this->session->userdata('username'); ?></h2>
            </div>
        </div>

        <br />

        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Administrator</h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/admin">
                            <i class="fa fa-home"></i> Home
                        </a>
                        <a href="<?php echo base_url(); ?>index.php/admin/CalonSiswaController">
                            <i class="fa fa-table"></i> Data Calon Siswa
                        </a>
                        <a href="<?php echo base_url(); ?>index.php/admin/KriteriaController">
                            <i class="fa fa-table"></i> Data Kriteria
                        </a>
                        <a href="<?php echo base_url(); ?>index.php/admin/HimpunanController">
                            <i class="fa fa-table"></i> Data Himpunan
                        </a>
                        <a href="<?php echo base_url(); ?>index.php/admin/NilaiCalonSiswaController">
                            <i class="fa fa-table"></i> Data Nilai Calon Siswa
                        </a>
                        <a href="<?php echo base_url(); ?>index.php/admin/NormalisasiController">
                            <i class="fa fa-bar-chart-o"></i> Data Normalisasi Dan Rangking
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav">
                <li class="">
                    <a class="user-profile dropdown-toggle">
                        SMA 12 TANGGERANG SELATAN
                    </a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="<?php echo base_url(); ?>assets/images/img.jpg" alt=""><?php echo $this->session->userdata('username'); ?>
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="<?php echo base_url(); ?>index.php/admin/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>