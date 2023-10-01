<?php
    require_once './php/DBConnect.php';
    $gallerySec = $db->gallerySec();
?>
<section class="section-finding container" id="section-gallery">
    <h2 class="text-center text-capitalize text-danger">See Our Recent matche's</h2>
    </br>

    <div class="row">
        <?php
            for($i = 1; $i <=2; $i++){
                echo '
                    <div class="col-sm">
                        <div class="card mb-3 shadow-lg" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img style="height: 35vh;width: 100%;" src="./assets/img/profiles/'.$gallerySec[$i]["card_img"].'" class="img-fluid rounded-start shadow-lg" alt="cuteCoupleImg">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-capitalize">'.$gallerySec[$i]["card_title"].'</h5>
                                        <p class="card-text">'.$gallerySec[$i]["card_des"].'</p>
                                        <span class="d-flex justify-content-between">
                                            <p class="card-text"><small class="text-muted">Last updated '.$gallerySec[$i]["card_last_update"].'</small></p>
                                            <a href="'.$gallerySec[$i]["redirect_link"].'" class="pb-3 text-decoration-none h5 moreBtn me-3">
                                                ->
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
            }
        ?>
    </div>
    <div class="row">
        <?php
            for($i = 2; $i <=3; $i++){
                echo '
                    <div class="col-sm">
                        <div class="card mb-3 shadow-lg" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img style="height: 35vh;width: 100%;" src="./assets/img/profiles/'.$gallerySec[$i]["card_img"].'" class="img-fluid rounded-start shadow-lg" alt="cuteCoupleImg">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-capitalize">'.$gallerySec[$i]["card_title"].'</h5>
                                        <p class="card-text">'.$gallerySec[$i]["card_des"].'</p>
                                        <span class="d-flex justify-content-between">
                                            <p class="card-text"><small class="text-muted">Last updated '.$gallerySec[$i]["card_last_update"].'</small></p>
                                            <a href="'.$gallerySec[$i]["redirect_link"].'" class="pb-3 text-decoration-none h5 moreBtn me-3">
                                                ->
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
            }
        ?>
    </div>

    <div class="row">
        <a href="" class="text-decoration-none">
            <h5 class="text-center moreBtn">More -></h5>
        </a>
    </div>

</section>