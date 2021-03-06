<?php include "../inc/config.php";
include ROOT_PATH . "inc/header.php";

if (isset($_POST['login'])) {
    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);

    $user = user_login($email, $password);


    if ($email == $user['email'] && $password == $user['password']) {
        $_SESSION['id']         = $user['id'];
        $_SESSION['username']   = $user['name'];
        $_SESSION['password']   = $user['password'];
        $_SESSION['email']      = $user['email'];
        $_SESSION['image']      = $user['image'];

        header("Location: ".BASE_URL."home");
    }

}
if (!empty($_SESSION['username'])) {
    header("Location:".BASE_URL."home/");
}

?>

<div class="container">
    <div class="row main">
        <div class="panel-heading">
           <div class="panel-title text-center">
           		<h1 class="title">Welcome to Todo's</h1>
           		<hr />
           	</div>
        </div>
		<div class="main-login main-center">
			<form class="form-horizontal" method="post" action="">

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
					<button name="login" type="submit" class="btn btn-primary btn-lg btn-block login-button">Login</button>
				</div>
				<div class="login-register">
		            <a href="#">Sign-up</a>
		         </div>
			</form>
		</div>
    </div>
</div>


<?php  include ROOT_PATH . "inc/footer.php";
