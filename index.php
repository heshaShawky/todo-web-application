<?php include 'inc/config.php';
    include ROOT_PATH . "inc/header.php";
    if (isset($_SESSION['username'])) {
        header("Location:".BASE_URL."home");
    }
    $tasks = get_all_sub("tasks");
?>

        <!-- Container -->
        <div class="container">
            <!-- Raw -->
            <div class="row">
                <div class="jumbotron">
                    <h1>Hello, world!</h1>
                    <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
                </div>
            </div>
        </div>

<?php include ROOT_PATH . "inc/footer.php";
