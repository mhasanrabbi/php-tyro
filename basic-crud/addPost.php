<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Blogs</title>
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
                    <h1>Add Post</h1>
                    <a href="index.php" class="btn btn-secondary">Back</a>
                </div>
            </div>
            <div class="row mt-2 w-75 bg-light mx-auto">
                <div class="col">
                    <form action="functions.php" method="POST">

                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" required class="form-control" name="title" placeholder="Enter Title">

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <input type="text" required class="form-control" name="category" placeholder="Category">

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Author</label>
                            <input type="text" required class="form-control" name="author" placeholder="Author">

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Date</label>
                            <input type="date" required name="published_at" class="form-control"
                                placeholder="dd-mm-yyyy">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="text" name="image_path" class="form-control" placeholder="Image">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit" name="addPost">
                                Add Post
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