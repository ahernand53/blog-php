<?php

namespace app\controllers\admin;

use app\controllers\BaseController;
use app\models\BlogPost;
use Sirius\Validation\Validator;

class PostController extends BaseController {

    public function getIndex(){
       $blogPosts = BlogPost::all();
        return $this->render('admin/posts.twig', ['blogPosts' => $blogPosts]);
    }

    public function getCreate(){
        // admin/posts/create
        return $this->render('admin/insert-post.twig');
    }

    public function postCreate(){
        $errors = [];
        $result = false;

        $validator = new Validator();
        $validator->add('title', 'required');
        $validator->add('content', 'required');

        if($validator->validate($_POST)){
            $blogPost = new BlogPost([
                'title'=> $_POST['title'],
                'content' => $_POST['content']
            ]);

            if($_POST['img']){
                $blogPost->img_url = $_POST['img'];
            }
            $blogPost->save();
            $result = true;
        }

        $errors = $validator->getMessages();




        return $this->render('admin/insert-post.twig', [
            'result' => $result,
            'errors' => $errors
        ]);
    }

}