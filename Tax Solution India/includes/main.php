<?php
include_once 'admin/config.php';
class Mithlesh_Admin{

//select news and events
function select_events_news($table){
$con=mysqli_connect('localhost','asn_company','admin@123','asn_company') or die(mysqli_error());
$this->table_name=$table;
$qry=mysqli_query($con,"SELECT * FROM $this->table_name order by id") or die("Select query fail".mysql_error());
return $qry;
}
//select news and events details more
function select_events_news_details($table,$id){
$con=mysqli_connect('localhost','asn_company','admin@123','asn_company') or die(mysqli_error());
$this->table_name=$table;
$qry=mysqli_query($con,"SELECT * FROM $this->table_name where heading='$id' order by id") or die("Select query fail".mysql_error());
return mysqli_fetch_array($qry);
	
}


}//close of class
?>