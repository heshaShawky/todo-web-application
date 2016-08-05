<?php session_start();
    require_once ROOT_PATH . "inc/database.php";
    include ROOT_PATH . "inc/functions.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>todo list</title>
        <link rel="stylesheet" href="<?php echo BASE_URL ?>css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo BASE_URL ?>css/style.css" />

        <!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    </head>

    <body>
        <?php include ROOT_PATH . 'inc/navigation.php'; ?>
