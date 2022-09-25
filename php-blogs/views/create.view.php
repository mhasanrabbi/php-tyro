<?php
$user = $_SESSION['logged_in_user_name'] ?? 'dummy';
include_once  __DIR__ . './partials/header.view.php';
?>

<body>
    <?php include_once  __DIR__ . './partials/nav.view.php'; ?>

    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="login-card">
                        <h2 class="text-center mb-4">Create Post</h2>
                        <form action="/create" method="post" enctype="multipart/form-data">
                            <p>
                                <label for="title">Title</label>
                                <input type="text" class="form-input" name="title" placeholder="Enter title" />
                            </p>
                            <p>
                                <label for="author">Author</label>
                                <input type="text" class="form-input" name="author" placeholder="Enter Author Name" />
                            </p>
                            <p>
                                <label for="image">Image</label>
                                <input type="text" class="form-input" name="image" placeholder="Enter Image Url" />
                            </p>
                            <input type="submit" class="btn btn-primary" value="create" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once  __DIR__ . './partials/footer.view.php'; ?>