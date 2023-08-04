<!DOCTYPE html>
<html>

<!-- Mirrored from world5.commonsupport.com/html/giving-hands/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jul 2018 19:53:51 GMT -->
<head>
<meta charset="utf-8">
<title>Oeil du peuple | Commentaires</title>
<!-- Stylesheets -->
<link href="<?=base_url()?>assets/user/css/bootstrap.css" rel="stylesheet">
<link href="<?=base_url()?>assets/user/css/revolution-slider.css" rel="stylesheet">
<link href="<?=base_url()?>assets/user/css/style.css" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="<?=base_url()?>assets/user/css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
    <div class="page-wrapper">
        <?php
            include_once("head.php");
        ?>
        <!--Page Title-->
        <section class="page-title" style="background-image:url(<?= base_url()?>/assets/user/images/parallax/comments.jpg);">
            <div class="auto-container">
                <div class="sec-title">
                    <h1>Les <span class="normal-font">Commentaires</span></h1>
                    <div class="bread-crumb"><a href="#">Accueil</a> / <a href="#" class="current">Commentaires</a></div>
                </div>
            </div>
        </section>
            <!--Sidebar Page-->
        <div class="sidebar-page">
            <div class="auto-container">
                <div class="row clearfix">               
                    <!--Sidebar-->
                    <div class="col-lg-12">
                        <section class="contact-section" style="background-image:url(<?= base_url()?>/assets/user/images/background/map-image.jpg);">
                            <div class="auto-container">
                                <div class="inner-container">
                                            
                                <div class="comments-area">
                                        <div class="group-title text-uppercase"><h2><a href="<?=site_url('article/details/'.$article->id, $article->id_categorie, $article->annee, time().rand(1, 2020))?>"><?=$article->titre?></a><br>(<?=count($commentaires) ?> Commentaires)</h2></div>
                                        
                                        <div class="comment-box">
											<?php foreach($commentaires as $comment):?>

                                            <div class="comment wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                                <div class="author-thumb img-circle"><img class="img-circle" src="<?=base_url()?>/assets/user/images/resource/author-thumb-2.png" alt=""></div>
                                                <div class="comment-info"><strong><?=$comment->username?></strong> <strong><?=$comment->pseudo?><div class="comment-time"><strong>Posté le <?=$comment->jour?>-<?=$comment->mois?>-<?=$comment->annee?> à <?=$comment->heure?>:<?=$comment->minute?></div></div>
                                                <div class="text"><strong><?=$comment->commentaire?></div>
											</div>
											<?php endforeach?>
                                    </div>
                                </div>
                                
                                    
                                    <!-- Comment Form -->
                                <div class="comment-form wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    
                                    <div class="group-title text-uppercase"><h2>Laisser votre commentaire</h2><div class="default-line-left"></div></div>
                                    
                                    <!--Comment Form-->
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
                                </div><!--End Comment Form -->
                                    
                                    
                                </div>
                            </div>
                        </section>
                    </div>
                    
                </div>
            </div>
        </div>
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
<script src="j<?=base_url()?>assets/user/s/script.js"></script>
</body>

<!-- Mirrored from world5.commonsupport.com/html/giving-hands/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jul 2018 19:57:06 GMT -->
</html>
