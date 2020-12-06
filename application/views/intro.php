<!DOCTYPE html>
<head>
<title>Project WEB</title>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/css/1.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/css/2.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/css/3.css" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/book.ico" />
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/4.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/5.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/6.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $(".main").onepage_scroll({
        sectionContainer: "section",
        responsiveFallback: 600
      });
    });
    var progress = setInterval(function() {
    var $bar = $('.bar');
    
    if ($bar.width()==400) {
        clearInterval(progress);
        $('.progress').removeClass('active');
    } else {
        $bar.width($bar.width()+40);
    }
    $bar.text($bar.width()/4 + "%");
    }, 800);
  </script>
  
<style>
#para1
{
font-family:"Baskerville Old Face";
}

</style>

</head>
<body>
<nav class="menu">
  <header class="logo">
    <h1><a title="Pemrograman WEB"><p id="para1">Pemrograman WEB - Sistem Informasi Perpustakaan Mahasiswa POLSUB </a></h1>
  </header>
</nav>
			
  <div class="wrapper">
    <div class="main">
      <section id="beranda" class="pertama">
        <article class="konten">
          <h2>Project Pemrograman WEB</h2>
          <p>Project Awal Dari Pemrograman WEB yang menggunakan Bahasa Pemrograman PHP Berbasis WEB menggunakan Database MySQL. Pada Project kali ini kami akan membahas tentang Sistem Informasi Perpustakaan Sederhana di Politeknik Negeri Subang.</p>
        </article>
        <a class="menuju" href="http://www.materi-it.com/">Hubungi Kami</a>
      </section>
	  	<img src="<?php echo base_url(); ?>assets/img/perpus.jpg" width="1366" height="724" />
		
      <section id="karyaku" class="kedua">
       <article class="konten">
          <h2>Author</h2>
          <p> &spades; </p>
        </article>
      </section>
 <img src="<?php echo base_url(); ?>assets/img/kelompok.jpg" width="1366" height="666" />
 
      <section id="jasa" class="ketiga">
        <article class="konten">
          <h2>Project Pemrograman WEB Sistem Informasi Perpustakaan Sederhana di Politeknik Negeri Subang</h2>
          <p>Program Sistem Informasi Perpustakaan ini untuk mengetahui dasar dari Program Database MySQL yang Terintegrasi dengan database PHPmyAdmin pada PHP yang terdapat fungsi dari SELECT, INSERT, UPDATE, DELETE.</p>
        </article>
        <a class="menuju" href=".php">Project Pemrograman WEB</a>
      </section>
<img src="<?php echo base_url(); ?>assets/img/buku.jpg" width="1366" height="666" />
	    
      <section id="blog" class="keempat">
        <h2 class="judul">Daftar Referensi Belajar Pemrograman WEB Kami</h2>
        <p class="judul">Web Design, HTML, CSS, JavaScript, PHP &amp; MySQL</p>
        <article id="post-1665" class="blogku">
          <h2><a href="http://www.w3schools.com" title="Ayo Ikut Belajar di W3 Schools Juga!">w3schools.com The world's largest web development site, education yourself! beginners and experts</a></h2>
          <p>Pertama mencari Referensi untuk pembelajaran Pemrograman WEB kami langsung memilih W3 Schools ini, karena dokumentasi yang lengkap berserta cara yang lengkap dengan contohnya membuat kami mudah mengerti dan memahami lalu bisa langsung kami implementasikan :). </p>
        </article>
        <article id="post-1986" class="blogku">
          <h2><a href="https://www.facebook.com/groups/35688476100/?fref=ts" title="Ikut Gabung yuk! di Group PHP Indonesia Facebook, nambah pengalaman, teman dan pengetahuan juga!">PHP Indonesia Bersama Berkarya Berjaya</a></h2>
          <p>Pada salah satu group besar pemrograman WEB di facebook kami mulai join pada Group PHP indonesia Facebook, disana banyak berkumpulnya orang-orang yang memang sudah berpengalaman dalam dunia Pemrograman WEB terutama Pemrograman PHP, banyak contoh Module, Project dan Tutorial Pemrograman WEB.</p>
        </article>
        <article id="post-1977" class="blogku">
          <h2><a href="http://www.nurulimam.com/belajar-php-untuk-pemula" title="Website Pemrograman WEB yang sangat bermanfaat, Ayo Kunjungi Website Ini!">Website Pemrograman PHP, CSS dan Javascript Nurul Imam</a></h2>
          <p>Website Nurul Imam ini banyak menginspirasi kami untuk belajar lebih lanjut lagi dengan yang namanya Pemrograman WEB dan Web Design, banyak tutorial PHP, CSS dan Javascript yang cukup lengkap bagi orang awam yang ingin belajar pemrograman WEB, pertama kali kami menemukan WEB ini kami melihat satu postingan yang menggambarkan secara singkat tahapan perancangan Pemrograman WEB dan Design WEB yang sangat bagus dan bermanfaat untuk memotivasi orang-orang yang ingin dengan giat mempelajarinya.</p>
        </article>
        <article id="post-1946" class="blogku">
          <h2><a href="http://www.php.net/" title="Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world">PHP is a popular general-purpose scripting language that is especially suited to web development</a></h2>
          <p>PHP.net salah satu Website yang sangat berguna untuk menambahkan dokumentasi yang diinginkan karena PHP.net ini Website resmi dari Bahasa Pemrograman PHP.</p>
        </article>
      </section>

      <section id="hubungi" class="kelima">
        <h3 class="judul" style="color:#fff">Profile Tentang Kami</h2>
        <footer class="penuh">
          <article class="kontakku">
            <p>Kami seorang mahasiswa Penjurusan IT Pemrograman yang mempunyai spesifikasi dasar skill berikut ini :</p>
            <p>HTML &amp; CSS</p>
            <div class="progress active">
                <div class="progress-bar progress-bar-success six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="85"></div>
            </div>
            <p>PHP</p>
            <div class="progress active">
                <div class="progress-bar progress-bar-danger six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="70"></div>
            </div>
            <p>MySQL</p>
            <div class="progress active">
                <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="75"></div>
            </div>
            <p>CMS</p>
            <div class="progress active">
                <div class="progress-bar progress-bar-warning six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="90"></div>
            </div>
            <p>SEO Marketing</p>
            <div class="progress active">
                <div class="progress-bar progress-bar-info six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="80"></div>
            </div>
            <script type='text/javascript'>
                $('.progress-bar').animate({},2000);
                $('.progress-bar').progressbar({display_text: 'fill'});
            </script>
            <p></p>
          </article>

          <div id="contact">
		  
    <!--Meload AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
 
      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});
 
      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);
 
      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {
 
        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        //==============Format Data==================
        data.addRows([
          ['MySQL', 75],
          ['PHP', 70],
          ['CMS', 90],
          ['HTML & CSS', 85],
          ['SEO Marketing', 80]
        ]);
        //==============Format Data==================
        
        // Set chart options
        //==============Setting Chart================
        var options = {'title':'Skill Kemampuan IT Kami',
                       'width':500,
                       'height':400};
        //==============Setting Chart================
 
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <!--Div Pie Chart-->
	
    <div id="chart_div"></div>
          </div>
        </footer>
      </section>
    </div>
          <div class="copy">
            <span class="kiri"><?php echo date('Y') ?></span>
            <span class="kanan"></span>
          </div>
  </div>

</body>
</html>