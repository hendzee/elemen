<!-- portfolio section -->
<div id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
					<h1 class="heading bold">PRODUK KAMI</h1>
					<hr>
				</div>
				<!-- ISO section -->
				<div class="iso-section">
					<ul class="filter-wrapper clearfix">
						<li><a href="#" data-filter="*" class="selected opc-main-bg">Semua</a></li>
						<?php foreach ($nav_portfolio as $val){ ?>
	     		 	<li><a href="#" class="opc-main-bg" data-filter="<?php echo ".".$val["nama_kategori"];?>"><?php echo $val["nama_kategori"];?></a></li>
	     		 	<?php } ?>
       		</ul>
       		<div class="iso-box-section wow fadeIn" data-wow-delay="0.9s">
       			<div class="iso-box-wrapper col4-iso-box">
							<?php foreach ($data_portfolio as $val) { ?>
       				 <div class="iso-box <?php echo $val["nama_kategori"];?> col-lg-4 col-md-4 col-sm-6">
       				 	<a href="assets/images/<?php echo $val["gambar"];?>" data-lightbox-gallery="portfolio-gallery"><img src="assets/images/<?php echo $val["gambar"];?>" alt="portfolio img"></a>
       				 </div>
							 <?php } ?>
       			</div>
       		</div>
				</div>
			</div>
		</div>
	</div>
</div>
