<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Herbal's Store - Kelola Kategori Barang</title>
	<link href="<?php echo base_url('assets1/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets1/css/font-awesome.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets1/css/datepicker3.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets1/css/styles.css'); ?>" rel="stylesheet">
	
	<link href="<?php echo base_url('assets1/js/dataTables/dataTables.bootstrap.css'); ?>" rel="stylesheet" />
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Herbal's</span>Store</a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li><a href="<?php echo base_url('index.php/home/'); ?>"><em class="fa fa-home">&nbsp;</em> Home</a></li>
			<li><a href="<?php echo base_url('index.php/barang/kelolabarang'); ?>"><em class="fa fa-cube">&nbsp;</em> Barang</a></li>
			<li><a href="<?php echo base_url('index.php/artikel/inputartikel'); ?>"><em class="fa fa-newspaper-o">&nbsp;</em> Artikel</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1" class="active">
				<em class="fa fa-sitemap">&nbsp;</em> Kategori <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="<?php echo base_url('index.php/kategori_artikel/kelolaka'); ?>">
						<span class="fa fa-arrow-right">&nbsp;</span> Kategori Artikel
					</a></li>
					<li><a class="active" href="<?php echo base_url('index.php/kategori_barang/kelolakb'); ?>">
						<span class="fa fa-arrow-right">&nbsp;</span> Kategori Barang
					</a></li>
				</ul>
			</li>
			<li ><a href="<?php echo base_url('index.php/admin/kelolaadmin'); ?>"><em class="fa fa-user">&nbsp;</em> Admin</a></li>
			<li><a href="<?php echo base_url('index.php/Login/logout') ?>"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Kelola Kategori Barang</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h3></h3>
				<div class="breadcrumbs">
                    <div class="page-title">
                        <a href="<?php echo base_url('index.php/kategori_barang/inputkb'); ?>" title="Tambah Kategori Barang" class="btn btn-danger"><i class="fa fa-plus"></i> Tambah</a>
                    </div>
              </div>
              <h3></h3>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-md-12 col-sm-6 col-xs-12">
                <div class="panel panel-info">
                        <div class="panel-heading">
                             Kelola Kategori Barang
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    	<tr>
                                    		<th>No</th>
                                    		<th>Nama Kategori Barang</th>
                                    		<th colspan="2">Opsi</th>
                                    	</tr>
                                    </thead>
                                    <tbody>
                                        <?php 

			$no = 1;
			foreach ($query->result() as $baris) {
				echo "<tr>";
				echo "<td>".$no."</td>";
				echo "<td>".$baris->nama_kategori_barang."</td>";
				echo "<td><a href=".base_url('index.php/kategori_barang/editkb/').$baris->id_kategori_barang.">Edit</a></td>";
				echo "<td><a href=".base_url('index.php/kategori_barang/hapus/').$baris->id_kategori_barang.">Hapus</a></td>";
				echo "</tr>";
			$no++; } 


		?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
        	</div>
			<div class="col-sm-12">
				<p class="back-link">Kelompok3 Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	
	<script src="<?php echo base_url('assets1/js/jquery-1.11.1.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets1/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets1/js/chart.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets1/js/chart-data.js'); ?>"></script>
	<script src="<?php echo base_url('assets1/js/easypiechart.js'); ?>"></script>
	<script src="<?php echo base_url('assets1/js/easypiechart-data.js'); ?>"></script>
	<script src="<?php echo base_url('assets1/js/bootstrap-datepicker.js'); ?>"></script>
	<script src="<?php echo base_url('assets1/js/custom.js'); ?>"></script>

	<script src="<?php echo base_url('assets1/js/dataTables/jquery.dataTables.js'); ?>"></script>
    <script src="<?php echo base_url('assets1/js/dataTables/dataTables.bootstrap.js'); ?>"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>