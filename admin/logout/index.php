<?php
include('../includes/config.php');
session_start();
unset($_SESSION['user_id']);
$user_id = isset($_SESSION['user_id']) ? ucfirst($_SESSION['user_id']) : 0;
if($user_id < 1)
{
?>
<script>
  window.location.href = "<?php echo $userpanel_base_url?>";
</script>
<?php
}
?>