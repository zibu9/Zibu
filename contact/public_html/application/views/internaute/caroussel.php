<!-- Women Banner Section Begin -->
<section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-lg-10 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active"><?=$caroussel_titre?></li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
						<?php foreach ($les_articles as $art):?>
						<?php if ($art->id == $article->id) {
							continue;
						}
						?>
							<div class="product-item">
								<div class="pi-pic">
									<img src="<?=$art->img_path?>" alt="">
									<div class="sale"><?=$art->id_categorie?></div>
									<div class="icon">
										<a href="<?=site_url('article/like_article/'.$art->id)?>" class="fav-count"><span class="icon flaticon-favorite"></span></a>
									</div>
									<ul>
										<li class="quick-view"><a href="<?=site_url('article/details/'.$art->id, $art->id_categorie, $art->annee, time().rand(1, 2020))?>?>">+ Lire...</a></li>
									</ul>
								</div>
								<div class="pi-text">
									<a href="<?=site_url('article/details/'.$art->id, $art->id_categorie, $art->annee, time().rand(1, 2020))?>">
										<h5><?=tronque($art->titre, 100)?></h5>
									</a>
								</div>
							</div>
						<?php endforeach?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End -->
