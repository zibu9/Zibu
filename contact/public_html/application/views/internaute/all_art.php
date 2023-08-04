<!--Blog News Section-->
<section class="blog-news-section latest-news">
    	<div class="auto-container">
			<?php if (count($les_articles)==0):?>
			<div class="sec-title text-center">
                <h2>AUCUNE PUBLICATION<span class="normal-font"></span></h2>
                <div class="text"><a href="<?=site_url('admin/index')?>">REVENIR A L'ACCUEIL</a></div>
            </div>
			<?php else:?>
			
            <div class="sec-title text-center">
                <h2>à la une<span class="normal-font"></span></h2>
                <div class="text">Nos publications </div>
            </div>
        	<div class="row clearfix">
				<?php foreach ($les_articles as $article):?>
					<div class="column blog-news-column col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<article class="inner-box">
							<figure class="image-box">
								<a href="<?=site_url('article/details/'.$article->id, $article->id_categorie, $article->annee, time().rand(1, 2020))?>"><img style="height:333px;" src="<?=$article->img_path?>" alt=""></a>
							</figure>
							<div class="content-box">
								<div class="post-info clearfix">
									<div class="post-time">Posté le <?=$article->jour?><?=' '.date("F",$article->mois) ?> <?=$article->annee?> à <strong> <?php if ($article->heure<=9) echo '0'; echo ($article->heure)?>:<?php if ($article->minute<=9) echo '0'; echo ($article->minute)?></strong></div>
									<div class="post-options clearfix">
										<a href="<?=site_url('commentaire/all_article_comments/'.$article->id, $article->titre)?>" class="comments-count"><span class="icon flaticon-interface-1"></span><?=$article->commentaire?></a>
										<a href="<?=site_url('article/like_article/'.$article->id)?>" class="fav-count"><span class="icon flaticon-favorite"></span><?=$article->nb_like?></a>
									</div>
								</div>
								<h3><a href="<?=site_url('article/details/'.$article->id, $article->id_categorie, $article->annee, time().rand(1, 2020))?>"><?=tronque($article->titre, 100)?></a></h3>
								<div class="text"></div>
								<a href="<?=site_url('article/details/'.$article->id, $article->id_categorie, $article->annee, time().rand(1, 2020))?>" class="theme-btn btn-style-two">Voir plus</a>
							</div>
						</article>
					</div>
				<?php endforeach?>
			</div>
		<?php endif; ?>
        </div>
    </section>
    <div class="sec-title text-center">
        <a href="<?= site_url('article/all_articles_user')?>" class="theme-btn btn-style-two">Voir toutes nos publications</a>
    </div> 
    <!--Default Section-->

  