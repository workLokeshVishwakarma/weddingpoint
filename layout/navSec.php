<?php
    if(str_contains(geturl().$_SERVER['PHP_SELF'], 'gallery')){
        require_once '../php/DBConnect.php';
    }else{
        require_once './php/DBConnect.php';
    }
    $urlGenerated = $db->hostname().$_SERVER['PHP_SELF'];
    if(str_contains($urlGenerated, $db->hostname().'/index')){
        session_start();
    }
?>

<nav class="navbar fixed-top navbar-expand-lg
    <?php
        if(!str_contains($urlGenerated, $db->hostname().'/index')){
            echo "bg-secondary";
        }
    ?>
">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="<?=$db->hostname().'/favicon.png'?>" alt="" width="60" height="40" class="d-inline-block align-text-top">
            <?=$metaData[0]['logo_small_name']?>
        </a>
        <button class="navbar-toggler containerBtnToggleNavbar" onclick="navbarToggle(this)" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="bar1NavBtn"></div>
            <div class="bar2NavBtn"></div>
            <div class="bar3NavBtn"></div>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <?php
                    if(str_contains($urlGenerated, 'gallery')){
                        echo '<li class="nav-item"><a class="nav-link" href="javascript:history.back()"><-Back</a></li>';
                    }else{
                        if(str_contains($urlGenerated, 'index')){
                            echo '<li class="nav-item"><a class="nav-link" href="#section-gallery">Gallery</a></li>';
                        }else{
                            echo '<li class="nav-item"><a class="nav-link" href="./gallery/">Gallery</a></li>';
                        }
                ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">More</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <?php
                                            if(!str_contains($urlGenerated, 'search')){
                                                echo '<li class="nav-item"><a class="nav-link" href="./search.php">&nbsp;&nbsp;See Profiles</a></li>';
                                            }
                                            if(!str_contains($urlGenerated, 'home')){
                                                echo '<li><a class="dropdown-item" href="./home.php">Upload Profile</a></li>';
                                            }
                                            if(!isset($_SESSION['username'])){
                                                echo'
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="./signup.php">SignUp</a></li>
                                                    <li><a class="dropdown-item" href="./login.php">Login</a></li>
                                                ';
                                            }
                                        ?>
                                    </ul>
                                </li>
                <?php } ?>
            </ul>
            <?php
                if(isset($_SESSION['username'])){
                    echo '<a class="btn btn-warning" href="';
                    echo str_contains($urlGenerated, 'gallery')?'../controller/logout.php':'./controller/logout.php';
                    echo '">Logout</a>';
                }
            ?>
        </div>
    </div>
</nav>