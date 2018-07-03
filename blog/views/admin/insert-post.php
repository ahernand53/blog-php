
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
        <div class="col-8">
            <h2>New Posts</h2>
            <a class="btn btn-primary" style="margin-bottom: 10px" href="<?php echo BASE_URL; ?>admin/posts">Back</a>
            <form method="post">
                <?php
                if (isset($result) && $result) {
                    echo '<div class="alert alert-success">Success!!!</div>';
                }
                ?>
                <div class="form-group">
                    <label for="inputTitle">Title</label>
                    <input class="form-control" type="text" name="title" id="inputTitle">
                </div>
                <label for="inputContent">Content</label>
                <textarea class="form-control" name="content" id="inputContent" rows="10"></textarea>
                <input class="btn btn-primary" style="margin-top: 10px" type="submit" value="Save">
            </form>
        </div>
        <div class="col-4">
            <sidebar>

            </sidebar>
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