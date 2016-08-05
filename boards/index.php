<?php
require '../inc/config.php';
include ROOT_PATH . 'inc/header.php';

if (isset($_GET['id']))
    $id = intval($_GET['id']);
    $board = get_single_sub("boards", $id);

if(empty($_GET['id'])) {
    header("Location:".BASE_URL." ") ;
}

$board_url = BASE_URL . "boards/?id=" . intval($board['id']) . "&n=" . urlencode($board['title']);
$lists = read_lists($id);
?>
<div class="container-fluid">
    <div class="row">
        <?php if (count($lists) > 0): ?>
            <?php foreach ($lists as $list): ?>
                <div class="col-sm-3">
                    <div class="add-list">
                        <h3><?php echo $list['title'] ?></h3>
                        <a href='<?php echo $board_url . "&create_list" ?>'>add item...</a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
        <div class="col-sm-3">
            <div class="add-list">
                <a href='<?php echo $board_url . "&create_list"?>'>add list...</a>
                <?php
                if (isset($_GET['create_list'])):
                    if (isset($_POST['create'])) {
                        $title = $_POST['title'];
                        create_list($title, $id);
                        header("Location: ".$board_url." ");
                    }
                ?>
                    <div class="row">
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
                    </div>
                <?php endif; ?>
            </div>
        </div>

    </div>
</div>



<?php include ROOT_PATH . 'inc/footer.php';
