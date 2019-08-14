<?php
include_once '../config.php';
$result=mysql_query("UPDATE news_events SET heading='$_REQUEST[heading]',p_desc='$_REQUEST[pdesc]' WHERE id='$_REQUEST[id]' ") or die(mysql_error()."Update query fail");
?>
<script>
window.history.back();
</script>