<?php

namespace app\controllers\admin;

use app\controllers\BaseController;

class PostController extends BaseController {

    public function getIndex(){
        // admin/posts or admin/posts/index
        global $pdo;

        $query = $pdo->prepare('SELECT * FROM blog_posts ORDER BY id DESC');
        $query->execute();

        $blogPosts = $query->fetchAll(\PDO::FETCH_ASSOC);

        return $this->render('admin/posts.twig', ['blogPosts' => $blogPosts]);
    }

    public function getCreate(){
        // admin/posts/create
        return $this->render('admin/insert-post.twig');
    }

    public function postCreate(){
        // admin/posts/create
        global $pdo;

        $result = false;
        $title = $_POST['title'];
        $content = $_POST['content'];

        if(!$title == null && !$content == null){
            $sql = 'INSERT INTO blog_posts (title, content) VALUES (:title, :content)';
            $query = $pdo->prepare($sql);
            $result = $query->execute([
                'title'=> $title,
                'content' => $content
            ]);
        }else{
            echo "<script>alert('Por favor, Ingrese los datos')</script>";
        }


        return $this->render('admin/insert-post.twig', ['result' => $result]);
    }

}