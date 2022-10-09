<?php
$user = $_SESSION['logged_in_user_name'] ?? 'dummy';
include_once  __DIR__ . './partials/header.view.php';

use App\Controllers\PostController;

?>

<body>
    <?php include_once  __DIR__ . './partials/nav.view.php'; ?>

    <div class="container table-container mt-5">
        <div class="row mb-2 justify-content-around ">
            <div class="col">
                <h2>All Posts</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-striped table-hover table-bordered text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                            <th scope="col" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        $posts = new PostController();
                        $results = $posts->allPosts();
                        // var_dump($results);
                        foreach ($results as $key => $result) { ?>
                        <tr>
                            <th scope="row" class="align-middle"><?= $key + 1 ?></th>
                            <td class="w-25 align-middle"><img
                                    src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1474154022i/3.jpg"
                                    alt="" class="w-25">
                            </td>

                            <td class="align-middle"><?= $result['title'] ?></td>
                            <td class="align-middle"><?= $result['author'] ?></td>
                            <td class="align-middle ">
                                <a class="text-white btn btn-success" href="<?= 'edit?id=' . $result['id'] ?>">Edit</a>
                            </td>
                            <td class="align-middle">
                                <form action="/dashboard" method="post">
                                    <a class="text-white btn btn-danger" type="submit"
                                        href="<?= 'dashboard?id=' . $result['id'] ?>">
                                        Delete </a>
                                </form>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php include_once  __DIR__ . './partials/footer.view.php'; ?>