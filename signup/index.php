<?php include "../inc/config.php";
include ROOT_PATH . "inc/header.php";

if (!empty($_SESSION['username'])) {
    header("Location: ". BASE_URL ."home ");
}

if ($_POST) {
    $user     = trim($_POST['name']);
    $password = trim($_POST['password']);
    $email    = trim($_POST['email']);

    create_user($user, $password, $email);
    header("Location: ". BASE_URL ." ");
}

?>

<div id="sign-up-message">

</div>
<div id="success-message"
    style="
        position: absolute;
        top: 0;
        display: none;
        width: 100%;
        ">
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <p>Welcome to todo's successfuly registration </p>
    </div>
</div>

<div class="container">
    <div class="row main">
        <div class="panel-heading">
           <div class="panel-title text-center">
           		<h1 class="title">Welcome to Todo's</h1>
           		<hr />
           	</div>
        </div>
		<div class="main-login main-center">
			<form class="form-horizontal" method="post" action="" id="sign-up">
				<div class="form-group">
					<label for="name" class="cols-sm-2 control-label">Your Name</label>
					<div class="cols-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
							<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name" required />
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="email" class="cols-sm-2 control-label">Your Email</label>
					<div class="cols-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
							<input type="email" class="form-control" name="email" id="email"  placeholder="Enter your Email" required />
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="password" class="cols-sm-2 control-label">Password</label>
					<div class="cols-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
							<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" required />
						</div>
					</div>
				</div>

				<div class="form-group ">
					<button name="register" type="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
				</div>
				<div class="login-register">
		            <a href="#">Login</a>
		         </div>
			</form>
		</div>

    </div>
</div>


<?php  include ROOT_PATH . "inc/footer.php";
