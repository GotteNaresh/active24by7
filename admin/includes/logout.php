<?php
include('config.php');
session_start();
unset($_SESSION['user_id']);
?>
<script>
  window.location.href = "<?php echo $base_url?>";
</script>