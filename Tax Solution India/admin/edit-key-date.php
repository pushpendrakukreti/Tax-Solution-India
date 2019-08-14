<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(function(){
$(".search1").click(function() 
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
	$("#result_"+p).html(html).hide();
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
<style>
.show {
	width:100%;
 //height:250px;
 //margin-top:-30px;
 //margin-bottom:15px;
	background-color:#FFFFFF;
	border-top:1px solid #CCCCCC;
}
.search1 {
	text-align: right;
	margin-right: 15px;
	margin-top: 10px;
	color: #FF0000;
	font-weight: bold;
	font-size: 15px;
}
.mk_css {
	font-family: inherit;
	font-size: inherit;
	line-height: inherit;
	padding: 3px 7px;
	font-size: 14px;
	line-height: 1.428571429;
	color: #555;
	vertical-align: middle;
	background-color: #fff;
	background-image: none;
	border: 1px solid #ccc;
	border-radius: 4px;
	-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
	box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
 -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
 transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
</style>
<?php
include("config.php");

if($_POST)
{
$q=$_POST['search'];
$sql_res=mysql_query("select * from key_date where id ='$q'");
while($data=mysql_fetch_array($sql_res))
{
?>
<div class="show">
  <div id="<?php echo $q;?>" class="search1" style="cursor:pointer">Closed</div>  
            <form method="post" action="include/edit-key-date.php">
              <div class='box-body pad'>
                <input type="hidden" name="id" value="<?php echo $data['id']?>" class="form-control">
                <div class="form-group">
                  <label>Enter Due Dates</label>
                 <input type="text" name="Due_Dates" class="form-control" value="<?php echo $data['Due_Dates']?>">
                </div>
                
                <div class="form-group">
                  <label>Enter Particulars</label>
                 <input type="text" name="particulars" class="form-control" value="<?php echo $data['Particulars']?>">
                </div>

                <div class="form-group">
                  <label>Enter Form / Challan Number</label>
                 <input type="text" name="Challan_Number" class="form-control"  value="<?php echo $data['Challan_Number']?>">
                </div>  
                
                
			  <input type="submit" name="submit"  value="Update" onclick="return edit()" class="btn btn-success">
			  </div>
            </form>
  <script>
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
</div>
<?php  

} } ?>
<!-- jQuery 2.0.2 -->
<script src="js/mithlesh_js.js"></script>
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

