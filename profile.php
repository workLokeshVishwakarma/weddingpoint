
<?php
    require_once './php/DBConnect.php';
    $db->authRedirectLogin();

    $title="Profile";
    include './layout/_header.php';
    include './layout/navSec.php';

    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){
        $url = "https";
    }else{
        $url = "http";
    }

    $url .= "://";

    $url .= $_SERVER['HTTP_HOST'];

    $url .= $_SERVER['REQUEST_URI'];

    $url_components = parse_url($url);

    parse_str($url_components['query'], $params);
    
    $resultRetSearch = $db->searchPofileSingle($params['id']);

    if(!$resultRetSearch){
        echo '
            <div class="alert alert-warning" style="margin-top: 5rem;">
                <h1>No Result Found!</h1>
            </div>
        ';
    }else{
        echo '
            <div class="container" style="margin-top: 5rem;">
                <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;width: 100%;">
                    <div>
                        <div class="card mb-3 shadow-lg" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img style="height: 100%;width: 100%;" src="./assets/img/'.$resultRetSearch[0]['profile_img'].'" class="img-fluid rounded-start shadow-lg" alt="cuteCoupleImg">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-capitalize">'.$resultRetSearch[0]['name'].'</h5>
                                        <p class="card-text">Gender: '.$resultRetSearch[0]['gender'].'</br>Age: '.$resultRetSearch[0]['age'].'</br>Religion: '.$resultRetSearch[0]['religion'].'</br>MotherTongue: '.$resultRetSearch[0]['mother_tongue'].'</br>Education: '.$resultRetSearch[0]['education'].'</p>
                                        <span class="d-flex justify-content-between">
                                            <p class="card-text"><small class="text-muted">Last updated '.$resultRetSearch[0]['last_update_profile'].'</small></p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ';
    }
  ?>

<?php 
    include './layout/_footer.php';
?>