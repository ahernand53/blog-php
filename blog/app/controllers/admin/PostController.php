<?php

namespace app\controllers\admin;

class PostController{

    public function getIndex(){
        // admin/posts or admin/posts/index
        global $pdo;

        $query = $pdo->prepare('SELECT * FROM blog_posts ORDER BY id DESC');
        $query->execute();

        $blogPosts = $query->fetchAll(\PDO::FETCH_ASSOC);

        return render('../views/admin/posts.php', ['blogPosts' => $blogPosts]);
    }

    public function getCreate(){
        // admin/posts/create
        return render('../views/admin/insert-post.php');
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


        return render('../views/admin/insert-post.php', ['result' => $result]);
    }

}