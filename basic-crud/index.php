<?php
session_start();
include_once 'db_connection.php';
?>

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
        <div class="container table-container mt-5">
            <div class="row mb-2 justify-content-around ">
                <div class="col-6">
                    <?php if (isset($_SESSION['success'])) : ?>
                    <h5 class="alert alert-success">
                        <?php
                            echo $_SESSION['success'];
                            ?>
                    </h5>
                    <?php unset($_SESSION['success']);
                    endif ?>
                    <h2>All Posts</h2>
                </div>
                <div class="col-6 text-end">
                    <a class="btn btn-outline-primary" href="addpost.php">Add Post</a>
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
                                <th scope="col">Category</th>
                                <th scope="col">Date</th>
                                <th scope="col">Author</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                            $query = "SELECT * FROM posts";
                            $statement = $conn->prepare($query);
                            $statement->execute();

                            // $statement->setFetchMode(PDO::FETCH_ASSOC);
                            $result = $statement->fetchAll(PDO::FETCH_OBJ);
                            if ($result) {
                                foreach ($result as $key => $data) {
                            ?>
                            <tr>
                                <th scope="row" class="align-middle"><?php echo $key + 1; ?></th>
                                <td class="w-25 align-middle"><img src="<?php echo $data->image_path; ?>" alt=""
                                        class="w-25">
                                </td>

                                <td class="align-middle"><?php echo $data->title; ?></td>
                                <td class="align-middle"><?php echo $data->category; ?></td>
                                <td class="align-middle">
                                    <?php
                                            $date = date_create($data->published_at);
                                            echo date_format($date, 'Y-m-d'); ?>

                                </td>
                                <td class="align-middle"><?php echo $data->author_name; ?></td>
                                <td class="align-middle">
                                    <a class="text-success" href="editpost.php?id=<?php echo $data->id; ?>"><i
                                            class="fas fa-edit "></i></a>
                                </td>
                                <td class="align-middle">
                                    <form action="functions.php" method="POST">
                                        <button class="btn text-danger" type="submit" name="deletePost"
                                            onclick="return confirm('Are you sure yopu want to delete this post?')"
                                            value="<?php echo $data->id ?>">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>

                                <?php
                                }
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