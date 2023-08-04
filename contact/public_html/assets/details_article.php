<!DOCTYPE html>
<html>

<!-- Mirrored from world5.commonsupport.com/html/giving-hands/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jul 2018 20:03:16 GMT -->
<head>
<meta charset="utf-8">
<title><?=$article->titre?></title>
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5f1e7af552832800122c165f&product=inline-share-buttons" async="async"></script>
<!-- Stylesheets -->
<link href="<?=base_url()?>assets/user/css/bootstrap.css" rel="stylesheet">
<link href="<?=base_url()?>assets/user/css/style.css" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="<?=base_url()?>assets/user/css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

<?php $this->load->helper('smiley'); ?>
	<!--Début caroussel-->
		<link rel="stylesheet" href="<?=base_url()?>assets/user/css/caroussel/font-awesome.min.css" type="text/css">
		<link rel="stylesheet" href="<?=base_url()?>assets/user/css/caroussel/themify-icons.css" type="text/css">
		<link rel="stylesheet" href="<?=base_url()?>assets/user/css/caroussel/elegant-icons.css" type="text/css">
		<link rel="stylesheet" href="<?=base_url()?>assets/user/css/caroussel/owl.carousel.min.css" type="text/css">
		<link rel="stylesheet" href="<?=base_url()?>assets/user/css/caroussel/nice-select.css" type="text/css">
		<link rel="stylesheet" href="<?=base_url()?>assets/user/css/caroussel/jquery-ui.min.css" type="text/css">
		<link rel="stylesheet" href="<?=base_url()?>assets/user/css/caroussel/slicknav.min.css" type="text/css">
		<link rel="stylesheet" href="<?=base_url()?>assets/user/css/caroussel/style.css" type="text/css">
	<!--Fin caroussel-->
</head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <?php
        include_once("head.php");
    ?>
    <!--Sidebar Page-->
    <div class="sidebar-page">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Side-->	
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    
                    
                    <!--Blog News Section-->
                	<section class="blog-news-section blog-detail no-padd-top no-padd-bottom">
                        <!--Cause Column-->
                        <div class="column blog-news-column padd-right-20">
                            <article class="inner-box">
							<h3><?=$article->titre?></h3>
							<div class="post-time">Publié le <?=$article->jour.' '.date("F", $article->mois).' '.$article->annee.' à '.$article->heure.':'?><?php if ($article->minute<=9) echo '0'; echo ($article->minute)?></div>
							
                            <br><hr>
                            <div class="post-share-options clearfix">
                                    <div class="pull-right social-links-two alt clearfix">
                                        <div class="sharethis-inline-share-buttons"></div>
                                    	<a href="https://www.facebook.com/sharer.php?u=<?=site_url()?><?=uri_string()?>&<?=$article->titre?>" class="facebook img-circle" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><span class="fa fa-facebook-f"></span></a>
                                        <a href="https://twitter.com/share?url=<?=site_url()?><?=uri_string()?>&text=<?=$article->titre?>&via=VOTRE-NOM-TWITTER" class="twitter img-circle" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><span class="fa fa-twitter"></span></a>
                                        <a href="https://plus.google.com/share?url=<?=site_url()?><?=uri_string()?>&hl=fr" class="google-plus img-circle"onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><span class="fa fa-google-plus"></span></a>
                                        <a href="https://pinterest.com/pin/create/button/?url=<?=site_url()?><?=uri_string()?>&media=<?=$article->img_path?>&description=<?=$article->titre?>" class="linkedin img-circle" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><span class="fa fa-pinterest-p"></span></a>
                                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?=site_url()?><?=uri_string()?>&title=<?=$article->titre?>" class="linkedin img-circle" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><span class="fa fa-linkedin"></span></a>
                                        <a href="https://api.whatsapp.com/send?text=*<?=$article->titre?>* 

                                        Numéro de la rédaction : 0027849730670

                                        <?=site_url()?><?=uri_string()?>&title=article/details/<?=$article->id?><?=$article->titre?>&media=<?=$article->img_path?>" class="whatsapp img-circle" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><span class="fa fa-whatsapp"></span></a>
										<a href="sms:?&body=<?=$article->titre?> <?=site_url()?><?=uri_string()?>" class="sms img-circle" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><span class="fa fa-whatsapp"></span></a>
                                    </div>
                                </div>
                                <br>
                                <figure class="image-box">
                                    <img src="<?=$article->img_path?>" alt="">
                                </figure>
                                <div class="content-box">
                                    <div class="post-info clearfix">
										<div class="post-time"><?php if(($article->date_pub != $article->date_mod) && ($article->date_mod != null) ): ?><strong>Dernière modification :  </strong><?=$article->jour_mod.' '.date("F", $article->mois_mod).' '.$article->annee_mod.' à '.$article->heure_mod.':'?><?php if ($article->minute_mod<=9) echo '0'; echo ($article->minute_mod)?><?php endif?></div>
                                        <div class="post-options clearfix">
                                            <a href="<?=site_url('article/like_article/'.$article->id)?>" class="fav-count"><span class="icon flaticon-favorite"></span><?=$article->nb_like?></a>
                                        </div>
                                    </div>
                                    <div class="text">
                                    	<?=$article->contenu?>
									</div>
									<?php $entier = 1; foreach ($images as $image):?>
									<br>
                                        <div class="row clearfix">
                                        	<div class="col-lg-4 col-md-6 col-xs-12">
                                            	<figure><img class="img-responsive" src="<?= $image->img_path;?>" alt=""></figure>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-xs-12">
                                            	<br>
                                            	<blockquote>
                                                	<p><?= $image->details;?></p>
                                                </blockquote>
                                            </div>
                                        <br>
                                        </div>
									<?php endforeach;?>
                                </div>
                                <br>
                                <div class="post-share-options clearfix">
                                    <div class="pull-right social-links-two alt clearfix">
                                    	<a href="https://www.facebook.com/sharer.php?u=<?=site_url()?><?=uri_string()?>&<?=$article->titre?>" class="facebook img-circle" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><span class="fa fa-facebook-f"></span></a>
                                        <a href="https://twitter.com/share?url=<?=site_url()?><?=uri_string()?>&text=<?=$article->titre?>&via=VOTRE-NOM-TWITTER" class="twitter img-circle" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><span class="fa fa-twitter"></span></a>
                                        <a href="https://plus.google.com/share?url=<?=site_url()?><?=uri_string()?>&hl=fr" class="google-plus img-circle"onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><span class="fa fa-google-plus"></span></a>
                                        <a href="https://pinterest.com/pin/create/button/?url=<?=site_url()?><?=uri_string()?>&media=<?=$article->img_path?>&description=<?=$article->titre?>" class="linkedin img-circle" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><span class="fa fa-pinterest-p"></span></a>
                                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?=site_url()?><?=uri_string()?>&title=<?=$article->titre?>" class="linkedin img-circle" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><span class="fa fa-linkedin"></span></a>
                                        <a href="https://api.whatsapp.com/send?text=*<?=$article->titre?>* 

                                        Numéro de la rédaction : 0027849730670

                                        <?=site_url()?><?=uri_string()?>&title=article/details/<?=$article->id?>/<?=$article->titre?>&media=<?=$article->img_path?>" class="whatsapp img-circle" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><span class="fa fa-whatsapp"></span></a>
										<a href="sms:?&body=<?=$article->titre?> <?=site_url()?><?=uri_string()?>" class="sms img-circle" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><span class="fa fa-whatsapp"></span></a>
                                    </div>
                                </div>
                                
                            </article>
                        </div>
                        
                        <!--Comments Area-->
                        <div class="comments-area">
                            <div class="group-title text-uppercase"><a href="<?=site_url('commentaire/all_article_comments/'.$article->id)?>"><h2>[<?=count($commentaires)?>] Commentaires</h2></a></div>
                            
                            <div class="comment-box">
                                <?php $i = 0; foreach($commentaires as $comment):?>
                                <div class="comment wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="author-thumb img-circle"><img class="img-circle" src="<?=base_url()?>/assets/user/images/resource/author-thumb-2.png" alt=""></div>
                                    <div class="comment-info"><strong><?=$comment->username?> <?=$comment->pseudo?></strong><div class="comment-time">Posté le <?=$comment->jour?>-<?=$comment->mois?>-<?=$comment->annee?> à <?=$comment->heure?>:<?=$comment->minute?></div></div>
                                    <div class="text">
                                        <?=$comment->commentaire?>
                                    </div>
                                </div>
                                <?php $i++; if ($i>2) {
                                    break;
                                } endforeach?>
                                
                            </div>
                        </div>
                        
                        
                        
                        <!-- Comment Form -->
                        <!--End Comment Form -->
                            
                    </section>
                
                    
                </div>
                <!--Content Side-->
                
                <!--Sidebar-->	
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar">
                    
                        
                        <!-- Popular Categories -->
                        <div class="widget popular-categories wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sidebar-title"><h3>Categories</h3></div>
                            <ul class="list">
                            	<li><a class="clearfix" href="<?=site_url()?>">Accueil</a></li>
                                <li><a class="clearfix" href="<?=site_url('article/categories/Politique')?>">Politique</a></li>
                                <li><a class="clearfix" href="<?=site_url('article/categories/Securite')?>">Sécurité</a></li>
                                <li><a class="clearfix" href="<?=site_url('article/categories/Economie')?>">Economie</a></li>
                                <li><a class="clearfix" href="<?=site_url('article/categories/Sport')?>">Sport</a></li>
                                <li><a class="clearfix" href="<?=site_url('article/categories/Justice')?>">Justice</a></li>
                                <li><a class="clearfix" href="<?=site_url('article/categories/Sante')?>">Sante</a></li>
                                <li><a class="clearfix" href="<?=site_url('article/categories/Culture')?>">Culture</a></li>
                                <li><a class="clearfix" href="<?=site_url('article/categories/Societe')?>">Société</a></li>
                                <li><a class="clearfix" href="<?=site_url('article/categories/Diplomatie')?>">Diplomatie</a></li>
                                <li><a class="clearfix" href="<?=site_url('article/categories/Education')?>">Education</a></li>
                                <li><a class="clearfix" href="<?=site_url('article/categories/Autres')?>">Autres</a></li>
                            </ul>
                        </div>
						<!-- Archives -->
						<?php if (count($archives)>0): ?>
                        <div class="widget archives-list wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sidebar-title"><h3>Archives</h3></div>
                            <ul class="list">
								<?php foreach ($archives as $archive):?>
								<li><a class="clearfix" href="<?=site_url('article/annual_archive/'.$archive->annee)?>"><span class="txt pull-left"><?=$archive->annee?></span> <span class="count pull-right">(<?=$archive->nb_archive?>)</span></a></li>
								<?php endforeach; ?>
                            </ul>
                        </div>
                        <?php endif;?>

                    </aside>
                </div>
                <!--Sidebar-->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <section class="contact-section" style="background-image:url(<?= base_url()?>/assets/user/images/background/map-image.jpg);">
                        <div class="auto-container">
                            <div class="inner-container">
                                <!-- Comment Form -->
                                <div class="comment-form wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                        
                                        <div class="group-title text-uppercase"><h2>Laisser votre commentaire</h2><div class="default-line-left"></div></div>
                                        
                                            <!--Comment Form-->
                                        
                                            <div class="row clearfix">
                                                <?= form_open('commentaire/submit_new_comment') ?>
                                                <div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                                                    <?=form_input(['type'=>"text", 'name'=>'username', 'placeholder'=>"Nom"]) ?>
                                                </div>
                                                <div class=" col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group">
                                                    <?=form_input(['type'=>"text", 'name'=>'pseudo', 'placeholder'=>"Pseudo"]) ?>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                                    <textarea name="commentaire" placeholder="Commentaire" required></textarea>
                                                    <?=form_error('commentaire', '<p class="text-danger">', '</p>')?>
                                                </div>
                                                
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group text-right">
                                                    <?=form_input(['type'=>"submit", 'name'=>'submit_form', 'value'=>"Commenter", "class"=>"theme-btn btn-style-one"]) ?>
                                                </div>
                                                <?=form_input(['type'=>"hidden", 'name'=>'id', 'value'=>$article->id]) ?>
                                                <?= form_close() ?>
                                            </div>
                                            <!--End Comment Form -->
                                </div>
                                
                                
                            </div>
                        </div>
                    </section>
                </div>
                
            </div>
        </div>
    </div>
    
    	
    
    <!--Main Footer-->
	<?php
		$les_articles = $same_categorie;
		if (isset($les_articles) && count($les_articles) > 1) {
			$caroussel_titre = "Dans la même catégorie !";
			include("caroussel.php");
		}
		$les_articles = $top10;

		if (isset($les_articles) && count($les_articles) > 1) {
			$caroussel_titre = "Les plus vues...";
			include("caroussel.php");
		}
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

<!---------------------------------------------------->

    <script src="<?=base_url()?>assets/user/js/caroussel/jquery-ui.min.js"></script>
    <script src="<?=base_url()?>assets/user/js/caroussel/jquery.countdown.min.js"></script>
    <script src="<?=base_url()?>assets/user/js/caroussel/jquery.nice-select.min.js"></script>
    <script src="<?=base_url()?>assets/user/js/caroussel/jquery.zoom.min.js"></script>
    <script src="<?=base_url()?>assets/user/js/caroussel/jquery.dd.min.js"></script>
    <script src="<?=base_url()?>assets/user/js/caroussel/jquery.slicknav.js"></script>
    <script src="<?=base_url()?>assets/user/js/caroussel/owl.carousel.min.js"></script>
    <script src="<?=base_url()?>assets/user/js/caroussel/main.js"></script>

</body>

<!-- Mirrored from world5.commonsupport.com/html/giving-hands/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jul 2018 20:03:25 GMT -->
</html>
