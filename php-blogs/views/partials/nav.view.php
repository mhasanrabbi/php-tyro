<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Hello <?php echo $user ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item mr-2">
                <?php if ($_SERVER["PATH_INFO"] == ("/dashboard")) { ?>
                <div>
                    <a class="nav-link btn btn-primary text-white" href="/create">Add Post</a>
                </div>
                <?php } ?>
            </li>
            <li class="nav-item">
                <?php if ($user != 'dummy') : ?>
                <div>
                    <a class="nav-link btn btn-primary text-white" href="/logout">Logout</a>
                </div>
                <?php endif; ?>
            </li>
        </ul>
    </div>
</nav>