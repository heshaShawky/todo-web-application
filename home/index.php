<?php require '../inc/config.php';
include ROOT_PATH . 'inc/header.php';
$boards = read_boards(intval($_SESSION['id']));
if (isset($_SESSION['username'])) :?>

<div class="container">
    <div class="row">
        <?php foreach ($boards as $board): ?>
        <div class="col-sm-4">
            <div class="add-list">
                <h2><a target="_blank" href="<?php echo BASE_URL . "boards/?id=" . intval($board['id']) . "&n=" . urlencode($board['title']) ?>"><?php echo $board['title'] ?></a></h2>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php if (isset($_GET['create']) && empty($_GET['create'])) { ?>
    <?php
    if(isset($_POST['create'])) {
        $title = $_POST['title'];
        create_board($title, intval($_SESSION['id']));
        header("Location: ".BASE_URL."home ");
    }
    ?>
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
<?php } elseif(!empty($_GET['create'])) {
    header("Location: ".BASE_URL."");
} ?>

<?php else: header("Location: ".BASE_URL.""); endif; ?>

<?php include ROOT_PATH . 'inc/footer.php';
