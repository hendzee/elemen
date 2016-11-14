<!-- team section -->
<section id="team">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
					<h1 class="heading bold">TIM KAMI</h1>
					<hr>
				</div>
			</div>
			<?php foreach ($data_team as $val) {?>
			<div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="0.9s">
				<div class="team-wrapper">
					<img src="assets/images/<?php echo $val["foto"]?>" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4><?php echo $val["nama_dpn"];?></h4>
							<h3><?php echo $val["jabatan"];?></h3>
							<hr>
							<ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul>
						</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>
