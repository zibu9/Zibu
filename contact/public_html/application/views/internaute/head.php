<header class="main-header">
    	<!-- Header Upper -->
    	<div class="header-upper">
        	<div class="auto-container clearfix">
            	<!-- Logo -->
                <div class="logo">
                	<a href="<?=site_url()?>"><!--img src="<?=base_url()?>assets/user/images/logo.png" alt="OEILDUPEUPLE.COM"--></a>
                 </div>
                 
                 <!--Info Outer-->
                 <div class="info-outer">
					 <!--Info Box-->
					 <div class="info-box">
                    	<div class="icon"><span class="flaticon-interface"></span></div>
                        <strong>EMAIL</strong>
                        <a>oeildupeuple@gmail.com</a>
                    </div>
                    <!--Info Box-->
                    <div class="info-box">
                    	<div class="icon"><span class="flaticon-technology"></span></div>
                        <strong>Telephone</strong>
                        <a class="phone" href="tel:+243821733889">+(243) 821 733 889</a>
					</div>
                    <!--Info Box-->
                    <div class="info-box social-box">
                    	<div class="social-links-one clearfix">
                        	<a href="https://facebook.com/oeildupeupleCom" class="facebook img-circle"onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><span class="fa fa-facebook-f"></span></a>
                            <!--<a href class="twitter img-circle" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><span class="fa fa-twitter"></span></a>-->
                            <!--<a href class="google-plus img-circle" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><span class="fa fa-google-plus"></span></a>-->
							<!--<a href class="linkedin img-circle" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><span class="fa fa-linkedin"></span></a>-->
							<a href="https://api.whatssapp.com/send?phone=27734207942" class="facebook img-circle" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><span class="fa fa-whatsapp"></span></a>
                        </div>
                    </div>
                 </div>
                
            </div>
        </div><!-- Header Top End -->
        
        <!-- Header Lower -->
        <div class="header-lower">
        	<div class="auto-container clearfix">
            	
                <!--Outer Box-->
                <div class="outer-box clearfix">
                
                    
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation">
                            
                                <li class="<?php $a = null; if (!isset($categorie)){
									echo "current"; $a=1;
								}?>"><a href="<?=site_url()?>">Accueil</a>
                                </li>
                                <li class="<?php if (isset($categorie)&&($categorie=="Politique")) {
									echo "current"; $a=1;
								} ?>"><a href="<?=site_url('article/categories/Politique')?>">politique</a></li>
                                <li class="<?php if (isset($categorie)&&($categorie=="Securite")) {
									echo "current"; $a=1;
								} ?>"><a href="<?=site_url('article/categories/Securite')?>">sécurité</a>
                                </li>
                                <li class="<?php if (isset($categorie)&&($categorie=="Economie")) {
									echo "current"; $a=1;
								} ?>"><a href="<?=site_url('article/categories/Economie')?>">économie</a>
                                </li>
                                <li class="<?php if (isset($categorie)&&($categorie=="Sport")) {
									echo "current"; $a=1;
								} ?>"><a href="<?=site_url('article/categories/Sport')?>">sport</a>
                                </li>
								<li class="<?php if (isset($categorie)&&($categorie=="Justice")) {
									echo "current"; $a=1;
								} ?>"><a href="<?=site_url('article/categories/Justice')?>">justice</a>
								</li>
								<li class="<?php if (isset($categorie)&&($categorie=="Sante")) {
									echo "current"; $a=1;
								} ?>"><a href="<?=site_url('article/categories/Sante')?>">santé</a>
								</li>
							<li class="dropdown<?php if($a == null){echo ' current';} ?>"><a href="#">autres</a>
                                    <ul class="submenu-dropdown">
                                        <li><a href="<?=site_url('article/categories/Culture')?>">culture</a></li>
                                        <li><a href="<?=site_url('article/categories/Societe')?>">société</a></li>
										<li><a href="<?=site_url('article/categories/Diplomatie')?>">diplomatie</a></li>
										<li><a href="<?=site_url('article/categories/Education')?>">éducation</a></li>
										<li class="<?php if (isset($categorie)&&($categorie=="Autres")) {
									echo "current";
								} ?>"><a href="<?=site_url('article/categories/Autres')?>">autres</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div><!-- Header Lower End-->
        
</header><!--End Main Header -->
    