<?php
$user = $_SESSION['logged_in_user_name'] ?? 'dummy';
include_once  __DIR__ . './partials/header.view.php';

use App\Controllers\PostController;

$posts = new PostController();
$result = $posts->index();

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
                        if ($result) {
                            foreach ($result as $key => $data) {
                        ?>
                        <tr>
                            <th scope="row" class="align-middle"><?= $key + 1; ?></th>
                            <td class="w-25 align-middle"><img src="<?= $data['image']; ?>" alt="" class="w-25">
                            </td>

                            <td class="align-middle"><?= $data['title']; ?></td>
                            <td class="align-middle"><?= $data['author']; ?></td>
                            <td class="align-middle ">
                                <a class="text-white btn btn-success"
                                    href="/edit?id=<?php echo $data['id']; ?>">Edit</a>
                            </td>
                            <td class="align-middle">
                                <form action="functions.php" method="POST">
                                    <button class="text-white btn btn-danger" type="submit" name="deletePost"
                                        onclick="return confirm('Are you sure yopu want to delete this post?')"
                                        value="14">
                                        Delete
                                    </button>
                                </form>
                            </td>
                            <?php
                            }
                                ?>
                        </tr>
                        <?php
                        } else {
                            ?>
                        <tr>
                            <td colspan="8">No Posts Found</td>
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