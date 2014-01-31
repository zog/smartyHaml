<?

require('/usr/local/lib/php/Smarty/Smarty.class.php');
$smarty = new Smarty();

$baseDir = "/Applications/MAMP/htdocs/foo/smarty/";

$smarty->setTemplateDir($baseDir.'templates');
$smarty->setCompileDir($baseDir.'templates_c');
$smarty->setCacheDir($baseDir.'cache');
$smarty->setConfigDir($baseDir.'configs');

$smarty->caching = Smarty::CACHING_OFF;
$smarty->force_compile = true;
$smarty->debugging = false;

?>
