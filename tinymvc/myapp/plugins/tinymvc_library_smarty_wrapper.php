<?php
// important so the TinyMVC and Smarty autoloaders work together!
define('SMARTY_SPL_AUTOLOAD', 1);
 
// require the Smarty class
require(dirname(__FILE__) . '../../../smarty/Smarty.class.php');
 
class TinyMVC_Library_Smarty_Wrapper Extends Smarty
{
  function __construct()
  {
    parent::__construct();
    $this->setTemplateDir(dirname(__FILE__) . '/../views/');
    $this->setCompileDir(dirname(__FILE__) . '/../../../smarty/templates_c/');
    $this->setConfigDir(dirname(__FILE__) . '/../../../smarty/configs/');
    $this->setCacheDir(dirname(__FILE__) . '/../../../smarty/cache/');
  }
}
?>