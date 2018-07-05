<?php

namespace app\controllers\admin;

use app\controllers\BaseController;

class adminController extends BaseController {

    public function getIndex(){
        return $this->render('admin/index.twig');
    }

}