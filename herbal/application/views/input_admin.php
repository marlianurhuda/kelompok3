<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('admin/header') ?>
</head>
<body>
	<?php $this->load->view('admin/nav') ?>	
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li><a href="<?php echo base_url('index.php/home/'); ?>"><em class="fa fa-home">&nbsp;</em> Home</a></li>
			<li><a href="<?php echo base_url('index.php/barang/kelolabarang'); ?>"><em class="fa fa-cube">&nbsp;</em> Barang</a></li>
			<li><a href="<?php echo base_url('index.php/artikel/inputartikel'); ?>"><em class="fa fa-newspaper-o">&nbsp;</em> Artikel</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-sitemap">&nbsp;</em> Kategori <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="<?php echo base_url('index.php/kategori_artikel/kelolaka'); ?>">
						<span class="fa fa-arrow-right">&nbsp;</span> Kategori Artikel
					</a></li>
					<li><a class="" href="<?php echo base_url('index.php/kategori_barang/kelolakb'); ?>">
						<span class="fa fa-arrow-right">&nbsp;</span> Kategori Barang
					</a></li>
				</ul>
			</li>
			<li class="active"><a href="<?php echo base_url('index.php/admin/kelolaadmin'); ?>"><em class="fa fa-user">&nbsp;</em> Admin</a></li>
			<li><a href="<?php echo base_url('index.php/Login/logout') ?>"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar--><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Input Admin</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h3></h3>
				<div class="breadcrumbs">
                    <div class="page-title">
                        <a href="<?php echo base_url('index.php/admin/kelolaadmin'); ?>" title="Kelola Admin Admin" class="btn btn-warning"><i class="fa fa-archive"></i> Kelola</a>
                    </div>
              </div>
              <h3></h3>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-md-12 col-sm-6 col-xs-12">
                <div class="panel panel-info">
                	<div class="panel-heading">
                           Input Admin
                	</div>
                	<div class="panel-body">
                		<?php 
		$form = new ecrud();
		$form->init('edit');
		$id = $this->input->get('id');
		$form->setTable('admin');
		$form->addInput('nama','text');
		$form->setId($id);
		$form->addInput('email','text');
		$form->setType('email','email'); 
		$form->addInput('password','password');
		// $form->setType('stok','number');
		$form->form();
		 ?>
                		
                	</div>
            	</div>
        	</div>
			<?php $this->load->view('admin/footer') ?>
		</div><!--/.row-->
	</div>	<!--/.main-->
	
	<?php $this->load->view('admin/script') ?>
		
</body>
</html>