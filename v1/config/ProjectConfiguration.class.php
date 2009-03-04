<?php

$dir = dirname(__FILE__);
$find = implode('/',array_slice(explode('/',$dir),1,-1));
$dir = '/'.$find;

require_once $dir.'/lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    // for compatibility / remove and enable only the plugins you want
    $this->enableAllPluginsExcept(array('sfDoctrinePlugin', 'sfCompat10Plugin'));
  }
}
