<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="page-header"><h3><img src="<?php echo base_url(); ?>assets/img/book1.png" width="50" height="50" /> <a class="font1">Sistem Informasi Pengelolaan Barang Milik Negara</a> <small><b class="font2"></b></small></h3></div>
                <ul class="nav nav-tabs">
                    <li><a href="<?php echo base_url()."index.php/User/User/index"; ?>"><i class="icon-home"></i> Home</a></li>
                    <?php if(isset($_SESSION['level'])){?>
                        <li class="dropdown pull-left">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-star-empty"></i> Verifikasi Permohonan Penetapan<strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url()."index.php/User/Statuspbmn/index2"; ?>"><i class="icon-star-empty"></i> Status Penggunaan BMN</a></li>
                            </ul>
                        </li>
                        <li class="dropdown pull-left">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-star-empty"></i> Verifikasi Permohonan Persetujuan<strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url()."index.php/User/Sementarabmn/index2"; ?>"><i class="icon-star-empty"></i> Penggunaan Sementara BMN</a></li>
                                <li><a href="<?php echo base_url()."index.php/User/Hibahbmn/index2"; ?>"><i class="icon-star-empty"></i> Hibah BMN</a></li>
                                <li><a href="<?php echo base_url()."index.php/User/Penjualanbmn/index2"; ?>"><i class="icon-star-empty"></i> Penjualan BMN</a></li>
                                <li><a href="<?php echo base_url()."index.php/User/Penghapusanbmn/index2"; ?>"><i class="icon-star-empty"></i> Penghapusan BMN</a></li>
                                <li><a href="<?php echo base_url()."pemusnahan"; ?>"><i class="icon-star-empty"></i> Pemusnahan BMN</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url()."index.php/User/Laporan/index"; ?>"><i class="icon-home"></i> Penyampaian Laporan Pengawasan dan Pengendalian BMN</a></li>
                        <li><a href="<?php echo base_url()."index.php/User/User/index"; ?>"><i class="icon-home"></i> Monitoring dan Evaluasi Permasalahan BMN</a></li>
                        <li><a href="handler.php?aksi=about"><i class="icon-briefcase"></i> About</a></li>				
                    <?php }?>
                    <li class="dropdown pull-right">
                        <?php if (isset($_SESSION['nama'])):?>
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-user"></i> <?php echo $_SESSION['nama'];?> <strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url()."index.php/User/User/logout"; ?>"><i class="icon-off"></i> Logout</a></li>
                                <?php else:?>
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-user"></i> Guest <strong class="caret"></strong></a>
                        <?php endif ?>
                    </li>
                </ul>
            </div>
    </div>
</div>