<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | nouveau</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/dist/css/skins/_all-skins.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	<script type="text/javascript">

			var i=1;
			function ajouter(){
				i++;
				var divParent = document.getElementById('divParent');
				// création des nouveaux noeuds
        var nouveauLabel = document.createElement('label');
        var nouveauLabel2 = document.createElement('label');
				var nouveauInput = document.createElement('input');
				var nouveauDiv = document.createElement('div');
				var nouveauTxt = document.createElement('textarea');

				// paramétrage des nouveaux noeuds
        nouveauLabel.appendChild(document.createTextNode("Image "+i));
        nouveauLabel2.appendChild(document.createTextNode("Texte de l'image  "+i));

        nouveauLabel.htmlFor = 'proposition'+i;
        nouveauLabel2.htmlFor = 'details'+i;
        nouveauInput.name = 'image'+i;
				nouveauInput.id = 'propostion'+i;
				nouveauInput.type = 'file';
				nouveauInput.className = 'form-control';
        //----
        nouveauTxt.name = 'details'+i;
				nouveauTxt.className = 'textarea';
				nouveauTxt.style = "width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px";
      
        // raccord des noeuds
				divParent.appendChild(nouveauLabel);
        divParent.appendChild(nouveauInput);
        divParent.appendChild(nouveauLabel2);
				divParent.appendChild(nouveauTxt);
				if (i>=2) {
					var addBtn = document.getElementById('addBtn');
					addBtn.setAttribute('disabled', 'disabled');
				}
			}
			//-->
	</script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  
  <?php
    include_once("head.php");
    include_once("leftpanel.php");
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Nouvelle
        <small>publication</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> dashboard</a></li>
        <li class="active">Nouveau</li>
      </ol>
    </section>
    <?=form_open_multipart('article/submit_new_article') ?>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Etape 1/2</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <div class="btn-group">
                    <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-wrench"></i></button>
                  </div>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
              <!-- /.box-header -->
              
                <div class="box-body pad">
                        <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Titre</label>
                          <?= form_input([ 'type'=>"text", 'class'=>"form-control", 'id'=>"exampleInputEmail1", 'name'=>"titre", 'value'=>set_value('titre')])?>
                          <!--input type="text" class="form-control" id="exampleInputEmail1" name="titre">-->
                          <?=form_error('titre', '<p class="text-danger">', '</p>')?>
                        </div>
                          <div class="form-group">
                            <label>Catégorie</label>
                            <select class="form-control select2" style="width: 100%;" name="categorie" value="<?=set_value('categorie');?>">
                              <option>Politique</option>
                              <option>Securite</option>
                              <option>Economie</option>
                              <option>Sport</option>
                              <option>Societe</option>
                              <option>Justice</option>
                              <option>Culture</option>
                              <option>Sante</option>
                              <option>Diplomatie</option>
                              <option>Education</option>
                              <option>Autres</option>
                            </select>
                            <?=form_error('categorie', '<p class="text-danger">', '</p>')?>
                          </div>
                        <label for="exampleInputEmail1">Details</label>
                        <?= form_textarea(['name'=>"details",'rows'=>"10", 'cols'=>"80", 'value'=>set_value('details'), 'id'=>"editor1"])?>
                        <?=form_error('details', '<p class="text-danger">', '</p>')?>

                </div>
            </div>
          </div>
          <!-- /.col-->
        </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Etape 2/2</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <div class="btn-group">
                    <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-wrench"></i></button>
                  </div>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
              <!-- /.box-header -->
                <div class="box-body pad">
                    <div class="col-md-12" id="divParent">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
												<?= form_input([ 'type'=>"file", 'class'=>"form-control", 'id'=>"exampleInputEmail1", 'name'=>"image", 'value'=>set_value('image')])?>

												<?=form_error('image', '<p class="text-danger">', '</p>')?>
												<?php if (isset($error)){echo '<p class="text-danger">'.$error.'</p>';}?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Commenter l'image</label>
												<?= form_input([ 'type'=>"text", 'class'=>"form-control", 'id'=>"exampleInputEmail1", 'name'=>"commentaire", 'value'=>set_value('commentaire')])?>
												<?=form_error('commentaire', '<p class="text-danger">', '</p>')?>
                    </div>
                </div>
                <div class="box-footer">
                    <input id="addBtn" type="button" onclick="ajouter()" value="Ajouter un champ Image" class="btn btn-warning">
                    <button type="submit" class="btn btn-primary pull-right">Publier </button>
                    <button type="reset" class="btn btn-danger pull-right">  Annuler</button>
                </div>
            </div>
          </div>
        </div>
      </section>
    <?= form_close()?>
  </div>
  <?php
    include_once("footer.php");
    include_once("controlsidebar.php");
  ?>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?=base_url()?>assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()?>assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url()?>assets/admin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>assets/admin/dist/js/demo.js"></script>
<!-- CK Editor -->
<script src="<?=base_url()?>assets/admin/bower_components/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?=base_url()?>assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor2')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
</body>
</html>
