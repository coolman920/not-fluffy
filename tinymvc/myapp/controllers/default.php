<?php

/**
 * default.php
 *
 * default application controller
 *
 * @package		TinyMVC
 * @author		Monte Ohrt
 */

class Default_Controller extends TinyMVC_Controller
{
  function index()
  {
  	$this->smarty->assign('foo','bar');
    $this->smarty->display('hello_view.tpl');
    //$this->view->display('index_view');
  }
}

?>
