<?php

namespace app\controllers;

use app\models\BlogPost;
use app\models\User;

class DetailsController extends BaseController{

    public function getIndex($id){

        $blogPost = BlogPost::where('id', $id)->first();

        return $this->render('details.twig', ['blogPost' => $blogPost]);

    }

}