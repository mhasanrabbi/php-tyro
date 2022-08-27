<?php
include 'db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Edit & Update</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="post.css" />
</head>

<body>
    <!-- Main -->
    <main>
        <div class="container">
            <div class="row mt-2">
                <div class="col d-flex justify-content-between align-items-center">
                    <h1>Edit & Update Post</h1>
                    <a href="index.php" class="btn btn-secondary">Back</a>
                </div>
            </div>
            <div class="row mt-2 w-75 bg-light mx-auto">
                <div class="col">
                    <?php
                    if (isset($_GET['id'])) {
                        $post_id = $_GET['id'];
                        $query = "SELECT * FROM posts WHERE id = :post_id LIMIT 1";
                        $statement = $conn->prepare($query);
                        $data = [
                            ':post_id' => $post_id
                        ];
                        $statement->execute($data);
                        $post = $statement->fetch(PDO::FETCH_OBJ);
                    }
                    ?>
                    <form action="functions.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="post_id" value="<?php echo $post->id ?>">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter Title"
                                value="<?php echo $post->title; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <input type="text" class="form-control" name="category" placeholder="Category"
                                value="<?php echo $post->category; ?>">

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Author</label>
                            <input type="text" class="form-control" name="author" placeholder="Author"
                                value="<?php echo $post->author_name; ?>">

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Date</label>
                            <input type="date" name="published_at" class="form-control"
                                value="<?php
                                                                                                $date = date_create($post->published_at);
                                                                                                echo date_format($date, 'Y-m-d'); ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" name="image_path" class="form-control" placeholder="Image"
                                value="<?php echo $post->image_path; ?>">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit" name="updatePost">
                                Update Post
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- footer -->
    <footer class="bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <p class="mt-2 mb-0">All Rights Reserved by Mahmud Hasan Rabbi</p>

                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a href="" class="nav-link"><i class="fa-brands fa-facebook"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link"><i class="fa-brands fa-github"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link"><i class="fa-brands fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>