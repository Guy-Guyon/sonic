<?php

namespace Sonic\Controllers;


class CreatorController extends CoreController{

    public function creators()
    {
        // Appel de la méthode show héritée de CoreController
        $this->show('creators');
    }
}

