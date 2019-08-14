<?php
$msg='';
include('config.php');
include_once 'checkauthenticator.php';
include('include/admin-main.php');
if(isset($_POST['submit'])){
$insertobj = new admin();
$msg=$insertobj->insert_details("notificaion");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>A S N & COMPANY | Add News & Events</title>
<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
<!-- bootstrap 3.0.2 -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- font Awesome -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- Ionicons -->
<link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
<!-- Theme style -->
<link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
<!-- bootstrap wysihtml5 - text editor -->
<link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
</head>
<body class="skin-blue">
<!-- header logo: style can be found in header.less -->
<?php include_once 'include/header.php'?>
<div class="wrapper row-offcanvas row-offcanvas-left">
  <!-- Left side column. contains the logo and sidebar -->
    <?php include_once 'include/left-menu.php'?>
  <!-- Right side column. Contains the navbar and content of the page -->
  <aside class="right-side">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
      <div class='row'>
        <div class='col-md-12'>
          <div class='box box-info'>
            <div class='box-header'>
              <h3 class='box-title'>Add News & Events Details</h3>
			  
              <!-- tools box -->
            </div>
			<?php if($msg=="pass"){ ?>
			<div class="alert alert-success alert-dismissable" style="width:95%">
                                        <i class="fa fa-check"></i>
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <b>OK! </b>Data saved successfully
                                    </div>
			<?php }?>
            <!-- /.box-header -->
            <form method="post" enctype="multipart/form-data">
              <div class='box-body pad'>
                <div class="form-group">
                  <label>Enter Heading</label>
                 <input type="text" name="heading" class="form-control" placeholder="Enter package name ...">
                </div>
                
                <div class="form-group">
				<label>Description</label>
                <textarea class="form-control"  name="pdesc" id="editor1" rows="10" cols="80">
				</textarea>
                </div>
                
			  <input type="submit" name="submit" class="btn btn-success">
			  </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </aside>
  <!-- /.right-side -->
</div>
<!-- ./wrapper -->
<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="js/AdminLTE/app.js" type="text/javascript"></script>
<!-- CK Editor -->
<script src="js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
<script type="text/javascript">
            $(function() {
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('editor1');
                //bootstrap WYSIHTML5 - text editor
                $(".textarea").wysihtml5();
            });
        </script>
        <script type="text/javascript">
            $(function() {
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('editor2');
                //bootstrap WYSIHTML5 - text editor
                $(".textarea").wysihtml5();
            });
        </script>

		
</body>
</html>
