<?php

namespace Phpcourse\Myproject\Classes\Controllers\Categories\Students;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\SmartyRendering;
use Phpcourse\Myproject\Classes\Traits\TraitAuth;
use SmartyException;

class PortfolioController implements ControllerMethodName
{
    use TraitAuth;
    /**
     * @return void
     * @throws SmartyException
     */
    public function index(): void
    {
        $data = ['title' => 'Portfolios', 'content' => 'categories/students/portfolios', 'auth' => $this->startLogin()];
        new SmartyRendering($data);
    }
}
