<section class="main-slider revolution-slider">
    	
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
				<?php foreach ($les_articles as $article):?>
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="<?=$article->img_path?>"  data-saveperformance="off"  data-title="<?=tronque($article->titre, 30)?>">
                    <img src="<?=$article->img_path?>"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="left" data-hoffset="15"
                    data-y="center" data-voffset="-100"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h3 class="bg-theme"><?=$article->id_categorie?></h3></div>
                    
                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="left" data-hoffset="15"
                    data-y="center" data-voffset="-40"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h1 class="bg-dark-theme text-uppercase"><?=tronque($article->titre, 45)?></h1></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="left" data-hoffset="15"
                    data-y="center" data-voffset="23"
                    data-speed="1500"
                    data-start="1500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h2 class="bg-dark-theme"><?=$article->id_categorie?></h2></div>
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="left" data-hoffset="15"
                    data-y="center" data-voffset="100"
                    data-speed="1500"
                    data-start="2000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><a href="<?=site_url('article/details/'.$article->id, $article->id_categorie, $article->annee, time().rand(1, 2020))?>" class="theme-btn rounded-btn">Lire...</a></div>
					</li>
				<?php endforeach;?>

                </ul>
            	<div class="tp-bannertimer"></div>
            </div>
        </div>
    </section>
