<!-- <section class="breadcrumb-option">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb__text">
					<h4>Agriculture</h4>
					<div class="breadcrumb__links">
						<a href="./index.html">Accueil</a>
						<span>Agriculture</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<section class="about spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="about__pic">
					<img src="<?= URL ?>public/ong_img/ONG/IMG_7830.jpg" alt="">
				</div>
			</div>
		</div>
		<!-- <div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="about__item">
					<h4>Qui nous sommes ?</h4>
					<p>Les programmes de publicité contextuelle ont parfois des politiques strictes qui doivent également être respectées. Prenons Google comme exemple.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="about__item">
					<h4>Qui faisons-nous ?</h4>
					<p>Dans cette génération numérique où les informations peuvent être facilement obtenues en quelques secondes, les cartes de visite ont toujours conservé leur importance.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="about__item">
					<h4>Pourquoi nous choisir</h4>
					<p>Une maison à deux ou trois étages est le moyen idéal pour maximiser le morceau de terre sur lequel se trouve notre maison, mais pour les personnes âgées ou infirmes.</p>
				</div>
			</div>
		</div> -->
	</div>
</section>

<section class="testimonial">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 p-0">
				<div class="testimonial__text">
					<span class="icon_quotations"></span>
					<p>“Vous sortez après le travail ? Emportez votre fer à friser au butane avec vous au bureau, chauffez-le,
						coiffez-vous avant de quitter le bureau et vous n'aurez pas à faire un voyage de retour à la maison.”
					</p>
					<div class="testimonial__author">
						<div class="testimonial__author__pic">
							<img src="<?= URL ?>public/img/about/testimonial-author.jpg" alt="">
						</div>
						<div class="testimonial__author__text">
							<h5>Augusta Schultz</h5>
							<p>Fashion Design</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 p-0">
				<div class="testimonial__pic set-bg" data-setbg="<?= URL ?>public/ong_img/16.png" style="background-image: url(&quot;<?= URL ?>public/ong_img/16.png&quot;);"></div>
			</div>
		</div>
	</div>
</section>


<div class="container mt-5">
	<div class="row">
		<?php
		if (!empty($this->agriculture)) {
			foreach ($this->agriculture as $key) {
		?>

				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="blog__item">
						<div class="blog__item__pic set-bg" data-setbg="<?= URL ?>public/ong_img/<?= $key['photo_agriculture'] ?>" style="background-image: url(&quot;<?= URL ?>public/ong_img/<?= $key['photo_agriculture'] ?>&quot;);"></div>
						<div class="blog__item__text">
							<span><img src="<?= URL ?>public/img/icon/calendar.png" alt=""> <?= $key["date_recolte"] ?></span>
							<h5><?= $key["produit"] ?></h5>
							<!-- <a href="#">Read More</a> -->
						</div>
					</div>
				</div>

		<?php
			}
		}
		?>
	</div>
</div>