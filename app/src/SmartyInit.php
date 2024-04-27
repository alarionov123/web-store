<?php

namespace App;

use Smarty\Smarty;

class SmartyInit extends Smarty
{
    public function __construct()
    {
        parent::__construct();

        $this->setTemplateDir('templates/');
        $this->setCompileDir('cache/templates_c/');
        $this->setConfigDir('config/');
        $this->setCacheDir('var/cache');
    }
}