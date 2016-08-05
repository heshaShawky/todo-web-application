<?php require '../inc/config.php';
include ROOT_PATH . 'inc/header.php';
$boards = read_bords(intval($_SESSION['id']));
if (isset($_SESSION['username'])) :?>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <?php foreach ($boards as $board): ?>
                <h2><?php echo $board['title'] ?></h2>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php if (isset($_GET['create']) && empty($_GET['create'])) { ?>
    <?php
    if(isset($_POST['create'])) {
        $title = $_POST['title'];
        create_board($title, intval($_SESSION['id']));
        header("Location: ".BASE_URL."home ");
    } ?>
    <div class="main-login main-center">
        <form class="form-horizontal" method="post" action="">

            <div class="form-group">
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-pencil fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="title" id="title"  placeholder="Enter your title" required />
                    </div>
                </div>
            </div>

            <div class="form-group ">
                <button name="create" type="submit" class="btn btn-primary btn-lg btn-block login-button">Create</button>
            </div>
        </form>
    </div>
<?php } ?>


<?php else: ?>

<?php header("Location: ".BASE_URL.""); ?>

<?php endif; ?>





<?php include ROOT_PATH . 'inc/footer.php';
