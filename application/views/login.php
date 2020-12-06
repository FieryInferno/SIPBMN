
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Perpustakaan Online</title>
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/book.ico">
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/scripts.js"></script>

	<style type="text/css">
      html, body {
        height: 100%;
        width: 100%;
        padding: 0;
        margin: 0;
      }

      #full-screen-background-image {
        z-index: -999;
        min-height: 100%;
        min-width: 1024px;
        width: 100%;
        height: auto;
        position: fixed;
        top: 0;
        left: 0;
      }

      #wrapper {
  	  width: 1000px;
      margin: auto;
      background-color:rgba(255,255,255,0.9);
      }

      a:link, a:visited, a:hover {
        color: blue;
      }

      a.to-top:link,
      a.to-top:visited, 
      a.to-top:hover {
        margin-top: 1000px;
        display: block;
        font-weight: bold;
        padding-bottom: 30px;
        font-size: 30px;
      }

    </style>
<style type="text/css">

.font1 {
    font-family: "Baskerville Old Face";
	color : black;
	font-size : 35pt;
}
.font2 {
    font-family: "Comic Sans MS";
	color : orange;
	font-size : 13pt;
}
.font3 {
    font-family: "Palace Script MT";
	color : red;
	font-size : 30pt;
}
.font4 {
    font-family: "Kristen ITC";
	color : blue;
	font-size : 13pt;
}
</style>
</head>
<body>

<div id="container">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<div class="page-header"><h3><img src="<?php echo base_url(); ?>assets/img/book1.png" width="50" height="50" /> <a class="font1">Sistem Informasi Perpustakaan</a> <small><b class="font2"></b></small></h3></div>
				<ul class="nav nav-tabs">
					<li <?php echo $page=='beranda'?'class="active"':'';?>><a href="<?php echo base_url()."index.php/Guest/index";?>"><i class="icon-home"></i> Beranda</a></li>
					<li <?php echo $page=='beranda_admin'?'class="active"':'';?>><a href="<?php echo base_url()."index.php/Guest/beranda_admin/";?>"><i class="icon-user"></i> Admin</a></li>
					<li <?php echo $page=='beranda_user'?'class="active"':'';?>><a href="<?php echo base_url()."index.php/Guest/beranda_user/";?>"><i class="icon-star-empty"></i> User</a></li>
					<li <?php echo $page=='beranda_about'?'class="active"':'';?>><a href="<?php echo base_url()."index.php/Guest/beranda_about/";?>"><i class="icon-briefcase"></i> About</a></li>
					
					<li class="dropdown pull-right">
					
						<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-user"></i> Guest <strong class="caret"></strong></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url()."index.php/Guest/beranda_akun/";?>"><i class="icon-th-list"></i> Buat Akun</a></li>
							<li><a href="<?php echo base_url()."index.php/Guest/beranda_intro/";?>"><i class="icon-globe"></i> Introduction</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo base_url()."index.php/Guest/beranda_login/";?>"><i class="icon-user"></i> Login</a></li>
											
						</ul>
					</li>
                    
				</ul>
                
                
			</div>
		</div>
	</div>
<div id="content">


<form method="POST" action="<?php echo base_url()."index.php/Login/index"; ?>" >
	<table>
		<tr>	
			<td valign="top"><label>Username&nbsp;</label></td>
			<td valign="top">:&nbsp;</td>
			<td><input class="span3" placeholder="Username" type="text" name="username" required></td>
		</tr>
		<tr>	
			<td valign="top"><label>Password&nbsp;</label></td>
			<td valign="top">:&nbsp;</td>
			<td><input class="span3" placeholder="Password" type="password" name="password" required></td>
		</tr>
		<tr>
			<td colspan="3" align="right"><button class="btn-info btn" type="submit">Login</button>&nbsp;&nbsp;<button class="btn-warning btn" type="reset">Reset</button></td>
		</tr>
	</table>
</form>

</div>
</body>
</html>
