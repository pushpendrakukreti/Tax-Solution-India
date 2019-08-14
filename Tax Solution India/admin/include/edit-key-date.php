<?php
include_once '../config.php';
$result=mysql_query("UPDATE key_date SET Due_Dates='$_REQUEST[Due_Dates]',Particulars='$_REQUEST[particulars]',Challan_Number='$_REQUEST[Challan_Number]' WHERE id='$_REQUEST[id]' ") or die(mysql_error()."Update query fail");
?>
<script>
window.history.back();
</script>