<?php include '../inc/config.php';

include ROOT_PATH . '/inc/header.php';

// read todo
if (isset($_GET["p"])) {
    $id     = intval($_GET["p"]);
    $todo   = get_single_sub("tasks", $id);
}

if(empty($todo)) {
    header("Location: ../index.php");
}

// Delete the todo
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    delete_single_sub("tasks", $id);
    header("Location: ../index.php");
}



include ROOT_PATH . 'inc/footer.php';
