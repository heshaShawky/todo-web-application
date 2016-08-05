<?php require '../inc/config.php';
include ROOT_PATH . 'inc/header.php';

if (isset($_SESSION['username'])) {
    echo "Welcome {$_SESSION['username']}";
} else {
    header("Location: ".BASE_URL."");
}


?>



<?php include ROOT_PATH . 'inc/footer.php';
