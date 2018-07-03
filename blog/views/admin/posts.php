
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog with php</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Blog PHP</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2>Posts</h2>
            <a class="btn btn-primary" href="<?php echo BASE_URL; ?>admin/posts/create">New Post</a>
                <table class="table">
                    <caption>Table content blogs</caption>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($blogPosts as $blogPost): ?>
                            <tr>
                                <td><?php echo $blogPost['title']?></td>
                                <td><a class="btn btn-warning" href="update-post.php">Edit</a></td>
                                <td><a class="btn btn-danger" href="<?php echo BASE_URL;?>admin/posts/delete?id=<?php echo $blogPost['id'] ?>">Delete</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
        </div>
    </div>
        <div class="row">
            <div class="col-12">
                <footer>
                    This is a footer
                    <a href="<?php echo BASE_URL; ?>admin">Admin Panel</a>
                </footer>
            </div>

        </div>
    </div>

</body>
</html>