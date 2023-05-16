<section class="breadcrumb-blog set-bg" data-setbg="<?= URL ?>public/ong_img/29.jpg" style="background-image: url(&quot;img/breadcrumb-bg.jpg&quot;);">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2>Cosmétique</h2>
			</div>
		</div>
	</div>
</section>

<section class="related spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="related-title">Cosmétique</h3>
			</div>
		</div>
		<div class="row">
			<?php
			if (!empty($this->revenue)) {
				foreach ($this->revenue as $key) {
			?>
					<div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
						<div class="product__item">
							<div class="product__item__pic set-bg" data-setbg="<?= URL ?>public/ong_img/<?= $key['photo_article'] ?>" style="background-image: url(&quot;img/product/product-2.jpg&quot;);"></div>
							<div class="product__item__text">
								<h6><?= $key['nom_article'] ?></h6>
								<a href="#" class="add-cart">+ Ajouter au panier</a>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<h5>$<?= $key['prix_article'] ?></h5>
							</div>
						</div>
					</div>
			<?php
				}
			}
			?>
		</div>
	</div>
</section>