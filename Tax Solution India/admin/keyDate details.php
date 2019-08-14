<?php
include_once 'config.php';
include_once 'checkauthenticator.php';
include_once 'include/admin-main.php';
$select_obj= new admin();
$result=$select_obj->select_data_record("key_date");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tax Solution Online | Key Date Details</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- DATA TABLES -->
        <link href="css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="jquery-1.8.0.min.js"></script>
 	<script type="text/javascript">
$(function(){
$(".search").click(function() 
{ 
var p = $(this).attr('id');
var dataString = 'search='+ p;
if(p!='')
{
	$.ajax({
	type: "POST",
	url: "edit-key-date.php",
	data: dataString,
	cache: false,
	success: function(html)
	{
	$("#result_"+p).html(html).show();
	}
	});
}return false;    
});

jQuery("#result").live("click",function(e){ 
	var $clicked = $(e.target);
	var $name = $clicked.find('.name').html();
	var decoded = $("<div/>").html($name).text();
	$('#searchid').val(decoded);
});
jQuery(document).live("click", function(e) { 
	var $clicked = $(e.target);
	if (! $clicked.hasClass(".search")){
	jQuery("#result").fadeOut(); 
	}
});
$('.searchid').click(function(){
   var p1 = $(this).attr('id');
	jQuery("#result_"+p1).fadeOut();
});
});
</script>
        <!----------------------------End------------------------------------->
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
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Tables</a></li>
                        <li class="active">Data tables</li>
                    </ol>
                    <a href="add key date.php"><input type="button" value="Add New" style="margin-top:5px" class="btn btn-success"></a>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                                                      
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Key Date Details</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                              
                                                <th>Due Dates</th>
                                                <th>Particulars</th>
                                                <th>Form / Challan Number</th>
												<th>Delete</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
												
									<?php while($row=mysqli_fetch_array($result)){?>
                                            <tr>
                                                <td><?php echo $row['Due_Dates'];?></td>
											    <td><?php echo $row['Particulars'];?></td>
                                                <td><?php echo $row['Challan_Number'];?></td>
                                              
											    
                                                
							            <td><a href="include/del-action-key-date.php?id=<?php echo $row['id']?>"><img src="img/delete.png" style="cursor:pointer" onClick="return del()" title="delete"></a></td>
                                        <td><a href="" id="<?php echo $row['id'];?>" class="search"><img src="img/edit.png" title="edit"></a></td>
                                            </tr>
                                             <tr style="height:2px!important"><td colspan="7"><div id="result_<?php echo $row['id'];?>"> </div></td></tr>
										<?php }?>
                                        </tbody>
                                        
                                    </table>
									<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
<script type="text/javascript">
				$(document).ready(function(){
				    $('#nivo-lightbox-demo a').nivoLightbox({ effect: 'fade' });
				});
				</script>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

<script>
	function del(){
	var r=confirm('Are you sure want to delete ? ');
	if(!r){
	return false;
	}
	else{
	return true;
	}
	}
	function edit(){
	var r=confirm('Are you sure want to edit ?');
	if(!r){
	return false;
	}
	else{
	return true;
	}
	}
	</script>
        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- DATA TABES SCRIPT -->
        <script src="js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>

    </body>
</html>