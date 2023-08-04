 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url()?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Oeil du peuple</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">ARTICLES</li>
        <li class="active">
          <a href="<?php echo site_url('admin/index');?>">
            <i class="fa fa-dashboard"></i> <span>Accueil</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('article/new_article_page');?>">
            <i class="fa fa-plus"></i> <span>Nouveau</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('article/archive_articles_page');?>">
            <i class="fa fa-trash-o"></i> <span>Archiver</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red"><?php if(isset($cpt_arc)) {echo $cpt_arc;}?></small>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('article/all_article_page');?>">
            <i class="fa fa-list"></i> <span>Nos Publications</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow"><?php if(isset($cpt_art)) {echo $cpt_art;}?></small>
            </span>
          </a>
        </li>
				<li>
          <a href="#<?php echo site_url('article/all_article_page');?>">
            <i class="fa fa-list"></i> <span>Articles Vidéos</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow"><?php if(isset($cpt_art)) {echo $cpt_art;}?></small>
            </span>
          </a>
        </li>
        <li class="header">AUTRES OPTIONS</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user text-red"></i>
            <span>Journaliste</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
							<a href="<?php echo site_url('journaliste/new_journaliste_page');?>">
							<i class="fa fa-plus text-yellow"></i> Nouveau
							<span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
						</a>
							</li>
            <li><a href="<?php echo site_url('journaliste/all_journaliste_page');?>"><i class="fa fa-list text-aqua"></i> Mes journalistes
						<span class="pull-right-container">
              <small class="label pull-right bg-yellow"><?php if(isset($cpt_journ)) {echo $cpt_journ;}?></small>
            </span></a></li>
            
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
