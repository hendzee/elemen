<!-- work section -->
<section id="work">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
					<h1 class="heading bold">LAYANAN KAMI</h1>
					<hr>
				</div>
			</div>
			<?php
		 		$counter = 0;
				$delay = ["0.6s", "0.9s", "1s"];
			?>
			<?php foreach ($data_layanan as $val) {?>
			<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="<?php echo $delay[$counter]?>">
				<i class="<?php echo $val["icon"];?>"></i>
				<h3><?php echo strtoupper($val["nama_layanan"]);?></h3>
				<hr>
				<p><?php echo $val["deskripsi"];?></p>
			</div>
			<?php $counter++; if($counter > 2){$counter = 0;}?>
			<?php } ?>
		</div>
	</div>
</section>
