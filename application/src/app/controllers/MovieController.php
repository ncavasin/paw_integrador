<?php

namespace Paw\app\controllers;

use Paw\core\Controller;

use const Paw\core\database\FILE_SIZE_MAX;

class MovieController extends Controller {
    public function movieInfo() {
        require $this->viewsDir . 'sel_butacas_view.php';
    }
}