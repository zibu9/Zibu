<!DOCTYPE html>
<html>

<!-- Mirrored from world5.commonsupport.com/html/giving-hands/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jul 2018 19:53:51 GMT -->
<head>
<meta charset="utf-8">
<title>Oeil du peuple</title>
<!-- Stylesheets -->
<link href="<?=base_url()?>assets/user/css/bootstrap.css" rel="stylesheet">
<link href="<?=base_url()?>assets/user/css/revolution-slider.css" rel="stylesheet">
<link href="<?=base_url()?>assets/user/css/style.css" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
    <div class="page-wrapper">
        <?php
			include_once("head.php");
		?>
		<section class="page-title" style="background-image:url(<?=base_url()?>/assets/user/images/parallax/.jpg);">
            <div class="auto-container">
                <div class="sec-title">
                    <h1><span class="normal-font">ARCHIVES</span></h1>
                    <div class="bread-crumb"><a>Archive</a> / <a class="current"><?=$annee?></a></div>
                </div>
            </div>
		</section>
		<!--Blog News Section-->
<section class="blog-news-section latest-news">
    	<div class="auto-container">
			<?php if (count($les_articles)==0):?>
			<div class="sec-title text-center">
                <h2>AUCUNE ARCHIVE<span class="normal-font"></span></h2>
                <div class="text"><a href="<?=site_url('admin/index')?>">REVENIR A L'ACCUEIL</a></div>
            </div>
			<?php else:?>
			
            <div class="sec-title text-center">
                <h2>publications archivées<span class="normal-font"></span></h2>
                <div class="text">Année d'archivage : <?=$annee?></div>
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
									<div class="post-time">Archivé depuis le <?=$article->jour?>-<?=$article->mois?>-<?=$article->annee?> à <?=$article->heure?>:<?=$article->minute?></div>
									<div class="post-options clearfix">
										<a href="<?=site_url('commentaire/all_article_comments/'.$article->id)?>" class="comments-count"><span class="icon flaticon-interface-1"></span><?=$article->commentaire?></a>
										<a href="<?=site_url('article/like_article/'.$article->id).'/'.$article->nb_like?>" class="fav-count"><span class="icon flaticon-favorite"></span><?=$article->nb_like?></a>
									</div>
								</div>
								<h3><a href="<?=site_url('article/details/'.$article->id, $article->id_categorie, $article->annee, time().rand(1, 2020))?>"><?=$article->titre?></a></h3>
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

		<?php
            include_once("footer.php");
        ?>     
    </div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="fa fa-arrow-up"></span></div>

<script src="<?=base_url()?>assets/user/js/jquery.js"></script> 
<script src="<?=base_url()?>assets/user/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/user/js/revolution.min.js"></script>
<script src="<?=base_url()?>assets/user/js/jquery.appear.js"></script>
<script src="<?=base_url()?>assets/user/js/knob.js"></script>
<script src="<?=base_url()?>assets/user/js/jquery.fancybox.pack.js"></script>
<script src="<?=base_url()?>assets/user/js/jquery.fancybox-media.js"></script>
<script src="<?=base_url()?>assets/user/js/validate.js"></script>
<script src="<?=base_url()?>assets/user/js/wow.js"></script>
<script src="<?=base_url()?>assets/user/js/script.js"></script>
</body>

<!-- Mirrored from world5.commonsupport.com/html/giving-hands/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jul 2018 19:57:06 GMT -->
</html>
