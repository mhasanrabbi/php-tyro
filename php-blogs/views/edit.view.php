<?php

use App\Controllers\PostController;

$user = $_SESSION['logged_in_user_name'] ?? 'dummy';
include_once  __DIR__ . './partials/header.view.php';

$posts = new PostController();
$result = $posts->getPost();
?>

<body>
    <?php include_once  __DIR__ . './partials/nav.view.php';
    var_dump($result);

    ?>


    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="login-card">
                        <h2 class="text-center mb-4">Update Post</h2>
                        <form action="/edit" method="post" enctype="multipart/form-data">
                            <p>
                                <label for="title">Title</label>
                                <input type="text" class="form-input" name="title" value="<?= $result[0]['title'] ?>" />
                            </p>
                            <p>
                                <label for="author">Author</label>
                                <input type="text" class="form-input" name="author"
                                    value="<?= $result[0]['author'] ?>" />
                            </p>
                            <p>
                                <label for="image">Image</label>
                                <input type="text" class="form-input" name="image" value="<?= $result[0]['image'] ?>" />
                            </p>
                            <input type="hidden" name="id" value="<?= $result[0]['id'] ?>" />
                            <input type="submit" class="btn btn-primary" value="update" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once  __DIR__ . './partials/footer.view.php'; ?>