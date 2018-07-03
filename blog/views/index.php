
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
            <h1>Blog with PHP</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <?php foreach ($blogPosts as $blogPost): ?>
            <div class="blog-post">
            <h2><?php echo $blogPost['title'] ?></h2>
            <p>Jan 1,2018 by <a href=""title="">Gabriel Manjarres</a></p>
            <div class="blog-post-image">
                <imgsrc=""alt="">
            </div>
                <div class="blog-post-content">
                <?php echo $blogPost['content'] ?>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
        <div class="col-4">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias assumenda, aut corporis ipsum natus nulla officia porro quis reiciendis repudiandae rerum sapiente tenetur voluptas. Aliquid doloremque dolores earum harum rem.
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