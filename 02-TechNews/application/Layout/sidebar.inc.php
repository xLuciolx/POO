

<!--colright-->
<div class="col-md-4 col-sm-12">
	<!--tab popular-->
	<ul role="tablist" class="tab-popular">
		<li class="active">
			<a href="#tab1" role="tab" data-toggle="tab">
				DERNI&Egrave;RE PUBLICATIONS
			</a>
		</li>
	</ul>
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="tab1">
			<ul class="list-news-popular">

				<?php foreach ($lasts as $last): ?>
					<li>
						<a href="<?= $last->generateURL();?>">
							<img alt="" src="<?= PUBLIC_URL . '/images/product/' . $last->getFEATUREDIMAGEARTICLE(); ?>">
						</a>
						<h3><a href="<?= $last->generateURL();?>"><?= $last->getTITREARTICLE(); ?></a></h3>
						<div class="meta-post">
							<a href="#">
								<?= $last->getAuteurObj()->getNOMCOMPLET(); ?>

							</a>
							<em></em>
							<span>
								<?= $last->getDATECREATIONARTICLE(); ?>
							</span>
						</div>
					</li>
				<?php endforeach; ?>

			</ul>

		</div>
	</div>

	<!-- subcribe box-->
	<div class="subcribe-box">
		<h3>NEWSLETTER</h3>
		<p>Inscrivez-vous pour recevoir nos dernières publications.</p>
		<input type="text" placeholder="Votre Email..." id="mail"/>
		<button class="my-btn" id="news">Je m'inscris</button>
	</div>
	<!-- connect us-->
	<div class="connect-us">
		<div class="widget-title">
			<span>
				SUIVEZ-NOUS
			</span>
		</div>
		<ul class="list-social-icon">
			<li>
				<a href="#" class="facebook">
					<i class="fa fa-facebook"></i>
				</a>
			</li>
			<li>
				<a href="#" class="twitter">
					<i class="fa fa-twitter"></i>
				</a>
			</li>
			<li>
				<a href="#" class="google">
					<i class="fa fa-google"></i>
				</a>
			</li>
			<li>
				<a href="#" class="youtube">
					<i class="fa fa-youtube-play"></i>
				</a>
			</li>
			<li>
				<a href="#" class="pinterest">
					<i class="fa fa-pinterest-p"></i>
				</a>
			</li>
			<li>
				<a href="#" class="rss">
					<i class="fa fa-rss"></i>
				</a>
			</li>
		</ul>
	</div>

	<!-- special post-->
	<div class="connect-us">
		<div class="widget-title">
			<span>
				En Avant
			</span>
		</div>
		<div class="list-special">
			<?php foreach ($specials as $special): ?>
				<article class="news-two-large">
					<a href="<?= $special->generateURL();?>">
						<img alt="" src="<?= PUBLIC_URL . '/images/product/' . $special->getFEATUREDIMAGEARTICLE(); ?>">
					</a>
					<h3><a href="<?= $special->generateURL();?>"><?= $special->getTITREARTICLE(); ?></a></h3>
					<div class="meta-post">
						<a href="#">
							<?= $special->getAuteurObj()->getNomComplet(); ?>
						</a>
						<em></em>
						<span>
							<?= $special->getDATECREATIONARTICLE(); ?>
						</span>
					</div>

				</article>
			<?php endforeach; ?>

		</div>
	</div>
</div>
