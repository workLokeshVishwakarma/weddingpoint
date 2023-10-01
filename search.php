<?php
    require_once './php/DBConnect.php';
    $db->authRedirectLogin();

    $title="Search";
    include './layout/_header.php';
    include './layout/navSec.php';
?>

<section style="min-height: 89vh;">
    <div class="container">
        <form action="" method="post">
            <div class="row" style="padding-top: 15vh;">
                <div class="col">
                    <label for="sexSelOpt">Looking For?</label>
                    <select class="form-select" id="sexSelOpt" name="gender" aria-label="Default select example">
                        <option selected value="women">Women</option>
                        <option value="men">Men</option>
                    </select>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <label for="sexSelOpt">Age?</label>
                            <select class="form-select" id="sexSelOpt" name="ageFrom" aria-label="Default select example">
                                <option selected value="18">18</option>
                                <?=
                                    $staringAge = 19;
                                    $endAge = 40;
                                    for ($x = $staringAge; $x <= $endAge; $x++) {
                                        echo "<option value=".$x.">".$x."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col">
                            <label>To</label>
                            <select class="form-select" id="sexSelOpt" name="ageTo" aria-label="Default select example">
                                <option selected value="40">40</option>
                                <?=
                                    $staringAge = 19;
                                    $endAge = 39;
                                    for ($x = $endAge; $x >= $staringAge; $x--) {
                                        echo "<option value=".$x.">".$x."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            </br>
            <div class="row">
                <div class="col">
                    <label for="sexSelOpt">Religion?</label>
                    <select class="form-select" id="sexSelOpt" name="religion" aria-label="Default select example">
                        <option selected value="hindu">Hindu</option>
                        <option value="muslim">Muslim</option>
                    </select>
                </div>
                <div class="col">
                    <label for="sexSelOpt">Mother Tongue?</label>
                    <select class="form-select" id="sexSelOpt" name="motherTongue" aria-label="Default select example">
                        <option selected value="hindi">Hindi</option>
                        <option value="marathi">Marathi</option>
                        <option value="bengali">Bengali</option>
                        <option value="gujarati">Gujarati</option>
                        <option value="english">English</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <button class="btn btn-outline-success" name="heroHomeSearchSubmitBtn" type="submit">Search</button>
                </div>
            </div>
        </form>
    </div>

    <?php
        if (isset($_POST['heroHomeSearchSubmitBtn'])) {
            $searchRetVals = $db->searchPofile($_POST['gender'], $_POST['ageFrom'], $_POST['ageTo'], $_POST['religion'], $_POST['motherTongue']);
            if(!$searchRetVals){
                echo '
                    <div class="alert alert-warning">
                        <h1>No Result Found!</h1>
                    </div>
                ';
            }else{
                echo '
                    <div class="container" style="overflow-x: scroll;">
                        <table class="table table-bordered border-primary table-dark table-striped mt-5 pt-5">
                            <thead>
                                <tr>
                                    <th scope="col">S.no</th>
                                    <th scope="col">ProfilePic</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Last Update Profile</th>
                                </tr>
                            </thead>
                            <tbody>
                ';
                for($i = 0; $i < count($searchRetVals); $i++){
                    echo '
                            <tr>
                                <th scope="row">'.($i+1).'</th>
                                <td>
                                    <img style="height: 40px;width: 40px;" src="./assets/img/profiles/'.$searchRetVals[$i]['profile_img'].'" class="img-fluid rounded-start shadow-lg" alt="cuteCoupleImg">
                                </td>
                                <td><a href="./profile.php?id='.$searchRetVals[$i]['name'].'">'.$searchRetVals[$i]['name'].'</a></td>
                                <td>'.$searchRetVals[$i]['last_update_profile'].'</td>
                            </tr>
                    ';
                }
                echo '
                        </tbody>
                        </table>
                    </div>
                ';
            }
        }
?>

</section>

<?php 
    include './layout/_footer.php';
?>