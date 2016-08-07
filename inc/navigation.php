<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Todos</a>
        </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <?php if (isset($_SESSION['username'])): ?>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo BASE_URL ?>home">Home <span class="sr-only">(current)</span></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a
                        href="#"
                        class="dropdown-toggle"
                        data-toggle="dropdown"
                        role="button"
                        aria-haspopup="true"
                        aria-expanded="false"
                        style="font-size:25px;">+</a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo BASE_URL?>home/?create">create board...</a></li>

                    </ul>
                </li>
                <li>
                    <?php if (!empty($_SESSION['image'])): ?>
                        <img src="" />

                    <?php else: ?>
                        <img class="img-responsive default-user" src="<?php echo BASE_URL?>images/default-user.png">
                    <?php endif; ?>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username']; ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">

                        <li><a href="#">Profile</a></li>
                        <li><a href="">Setting</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo BASE_URL ?>inc/logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->

    <?php else: ?>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo BASE_URL ?>">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="#">About</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo BASE_URL ?>login">sign-in</a></li>
                <li><a href="<?php echo BASE_URL ?>signup">sign-up</a></li>

            </ul>
        </div><!-- /.navbar-collapse -->

    <?php endif; ?>

    </div><!-- /.container-fluid -->
</nav>
