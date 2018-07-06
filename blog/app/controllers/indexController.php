<?php

namespace app\controllers;

use app\models\BlogPost;

class indexController extends BaseController {

    public function getIndex(){
        $blogPosts = BlogPost::query()->get();

        return $this->render('index.twig', ['blogPosts' => $blogPosts]);
    }

}