<?php
include_once '../config.php';
mysql_query("DELETE FROM key_date WHERE id='$_REQUEST[id]' ") or die(mysql_error());

?>
<script>
window.history.back();
</script>