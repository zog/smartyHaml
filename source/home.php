<?php
  include("../smarty/includes/smarty.php");

  $smarty->assign('title', "Test", true);
  $smarty->display('home.tpl');
?>
