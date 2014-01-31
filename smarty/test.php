<?php
  include("includes/smarty.php");

  $smarty->assign('foo', ['Ned', 'Med', 'Sed', 'Red', 'Aed'], true);
  $smarty->assign('baz', ['Ned', 'Med', 'Sed', 'Red', 'Aed'], true);
  $smarty->display('test.tpl');
?>
