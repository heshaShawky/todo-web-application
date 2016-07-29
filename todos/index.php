<?php include '../inc/config.php';

include ROOT_PATH . '/inc/header.php';

// read todo
if (isset($_GET["p"])) {
    $id = intval($_GET["p"]);
    $todo = get_single_post($id);
    echo $todo['title'];
}

if(empty($todo)) {
    header("Location: ../index.php");
}

// Delete the to do
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    delete_single_post($id);
    header("Location: ../index.php");
}



include ROOT_PATH . 'inc/footer.php';
