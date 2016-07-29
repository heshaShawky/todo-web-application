<?php include '../inc/config.php';

include ROOT_PATH . '/inc/header.php';


if (isset($_GET["p"])) {
    $id = intval($_GET["p"]);
    $todo = get_single_post($id);

    echo $todo['title'];
} elseif (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    delete_single_post($id);
}

if(empty($todo)) {
    header("Location: ../index.php");
}


include ROOT_PATH . 'inc/footer.php';
