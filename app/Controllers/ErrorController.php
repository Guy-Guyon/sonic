<?php

namespace Sonic\Controllers;


class ErrorController extends CoreController
{
    public function page404()
    {
        $this->show('page404');
    }
}