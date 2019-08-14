<?php
include_once 'config.php';

class admin{

//check user for login
function slect_valid_user($table){
$con=mysqli_connect('localhost','asn_company','admin@123','asn_company') or die(mysqli_error());
$this->table_name=$table;
$result=mysqli_query($con,"SELECT username,password FROM ".$this->table_name." WHERE username='$_POST[username]' AND password='$_POST[password]' ") or die(mysqli_error());
if(mysqli_num_rows($result)>0){
session_start();
$_SESSION['user']="userlogging";
header('location:dashboard.php');
}
else{
echo "<script>alert('Username or password is not correct')</script>";
}
}

//code to insert details
function insert_details($table){
$con=mysqli_connect('localhost','asn_company','admin@123','asn_company') or die(mysqli_error());
$this->table_name=$table;

$result=mysqli_query($con,"INSERT INTO ".$this->table_name."(heading,p_desc) 
       value('$_POST[heading]','$_POST[pdesc]') ") or die(mysqli_error());
		  
				   if($result)
				   return $msg="pass";
				   else
				   return $msg="fail";
}

//code to insert package more details
function insert_pac_more_details($table,$ptype){
$con=mysqli_connect('localhost','asn_company','admin@123','asn_company') or die(mysqli_error());
$this->table_name=$table;
$result=mysqli_query($con,"INSERT INTO ".$this->table_name."(pack_name,p_desc,pack_type) 
       value('$_POST[pack_name]','$_POST[pdesc]','$ptype') ") or die(mysqli_error());
	    
		//select max id to upload file
		$qq=mysqli_query($con,"select max(id) from $this->table_name") or die(mysqli_error());
		$rr=mysqli_fetch_array($qq);
		$max_id=$rr[0];
		//code to move uploded file
		move_uploaded_file($_FILES['photo']['tmp_name'],"upload/pack/pack more/".$max_id.".jpg");
				  
				   if($result)
				   return $msg="pass";
				   else
				   return $msg="fail";
}

//select package more details
function select_pack_more($table,$ptype){
$con=mysqli_connect('localhost','asn_company','admin@123','asn_company') or die(mysqli_error());
$this->table_name=$table;
$qry = mysqli_query($con,"SELECT * FROM ".$this->table_name." where pack_type='$ptype' order by id DESC ") or die("select query fail".mysqli_error());
  return $qry;
 
}

//select package name
function select_pac_name($table,$ptpye){
$con=mysqli_connect('localhost','asn_company','admin@123','asn_company') or die(mysqli_error());
$this->table_name=$table;
$qry = mysqli_query($con,"SELECT pack_name FROM ".$this->table_name." where pack_type='$ptpye' order by id DESC") or die("select query fail".mysqli_error());
  return $qry;
 
}

//select news and views
function select_data_record($table){
$con=mysqli_connect('localhost','asn_company','admin@123','asn_company') or die(mysqli_error());
$this->table_name=$table;
$qry = mysqli_query($con,"SELECT * FROM ".$this->table_name." order by id DESC");
  return $qry;
 
}

//code to insert pack gallery
function insert_trips_pac_gallery($table,$ptpye){
$con=mysqli_connect('localhost','asn_company','admin@123','asn_company') or die(mysqli_error());
$this->table_name=$table;

$result=mysqli_query($con,"INSERT INTO ".$this->table_name."(pack_name,pack_type) 
       value('$_POST[pack_name]','$ptpye') ") or die(mysqli_error());
	    
		//select max id to upload file
		$qq=mysqli_query($con,"select max(id) from $this->table_name") or die(mysqli_error());
		$rr=mysqli_fetch_array($qq);
		$max_id=$rr[0];
		//code to move uploded file
		move_uploaded_file($_FILES['photo']['tmp_name'],"upload/pack/gal/".$max_id.".jpg");
				  
				   if($result)
				   return $msg="pass";
				   else
				   return $msg="fail";
}

//select to select pack gallery
function select_pac_gallery($table,$ptpye){
$con=mysqli_connect('localhost','asn_company','admin@123','asn_company') or die(mysqli_error());
$this->table_name=$table;
$qry = mysqli_query($con,"SELECT * FROM ".$this->table_name." where pack_type='$ptpye' order by id DESC") or die("select query fail".mysqli_error());
  return $qry;
 
}

//code to insert key date details
function insert_key_date_details($table){
$con=mysqli_connect('localhost','asn_company','admin@123','asn_company') or die(mysqli_error());
$this->table_name=$table;

$result=mysqli_query($con,"INSERT INTO ".$this->table_name."(Due_Dates,Particulars,Challan_Number) 
       value('$_POST[Due_Dates]','$_POST[particulars]','$_POST[Challan_Number]') ") or die(mysqli_error());
		  
				   if($result)
				   return $msg="pass";
				   else
				   return $msg="fail";
}


}//closing of class
?>