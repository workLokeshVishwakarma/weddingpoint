<?php
    require_once './php/DBConnect.php';
    $db->authLogin();

    $title="Login";
    include './layout/_header.php';

    $message=NULL;
    if(isset($_POST['loginBtn'])){
        $message = $db->login($_POST['username'], $_POST['password']);
    }
?>

<nav class="navbar fixed-top navbar-expand-lg" style="background: #00000040;box-shadow: 0px 0px 16px 5px #1f1d1d;">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="./favicon.png" alt="" width="60" height="40" class="d-inline-block align-text-top">
            <?=$metaData[0]['logo_small_name']?>
        </a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
        </ul>
    </div>
</nav>

<div class="loginPgCon">
    <div style="width: 90%;margin: auto;padding-top: 2rem;">
        <div class="col-md-6">
            <?php if(isset($message)): ?>
                <div class="alert-danger shadow rounded" style="text-align: center;padding: 7px;font-size: 1.6rem;"><?= $message; ?></div>
            <?php endif; ?>
            <div class="panel panel-default shadow rounded bg-light p-4">
                <div class="panel-heading d-flex" style="border-bottom: 1px solid grey;">
                    <div class="col-md-6 m-4">
                        <img src="./assets/img/security-icon.png" alt="security-icon" class="img img-responsive img-thumbnail shadow mb-4">
                    </div>
                    <h4 class="text-secondary text-center" style="text-shadow: 3px 3px 5px #d8d0d0;"><i class="fas fa-database"></i> Login </h4>
                </div>
                <div class="panel-body">
                    <form class="form-vertical" role="form" method="post" action="<?=$_SERVER['PHP_SELF']?>">
                        <div class="form-group m-2">
                            <input type="email" class="form-control shadow mb-3" required="true" name="username" placeholder="Email">
                        </div>
                        <div class="form-group m-2">
                            <input type="password" required="true" class="form-control shadow mb-3" name="password" placeholder="Password">
                        </div>
                        <div class="form-group loginBtn m-2">
                            <button type="submit" name="loginBtn" class="btn btn-primary btn-sm"><i class="fas fa-sign-in-alt"></i> Login</button>
                            <a href="./signup.php" class="btn btn-sm btn-warning">Don't Have An Account</a>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>