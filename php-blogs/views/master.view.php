<?php
include_once  __DIR__ . './partials/header.view.php';
?>
<style>
    .menu_button {
        position: absolute;
        margin-top: 20px;
        height: 50px;
        width: 200px;
        font-size: 25px;
    }

    .menu_button1 {
        position: absolute;
        margin-top: 20px;
        margin-left: 200px;
        height: 50px;
        width: 200px;
        font-size: 25px;
    }

    .menu_button2 {
        position: absolute;
        margin-top: 20px;
        margin-left: 400px;
        height: 50px;
        width: 200px;
        font-size: 25px;
    }
</style>

<div class="col-md-12">
    <a href="/dashboard" type="button" class="btn btn-info menu_button rounded-0">Dashboard</a>
    <a href="#" type="button" class="btn btn-info menu_button1 rounded-0">New Menu</a>
    <a href="#" type="button" class="btn btn-info menu_button2 rounded-0">New Menu</a>
</div>

<?php include_once  __DIR__ . './partials/footer.view.php'; ?>