<?php
    $i = 0;

    require_once './php/DBConnect.php';
    $db->authRedirectLogin();

    include './controller/profileUpload.php';

    $retValProfileValidate = NULL;
    if (isset($_POST['sumbitBtnProfle'])) {
        $retValProfileValidate = imageUpload($_FILES, $_POST, $db);
    }

    $title = "Home";
    $setHomeActive = "active";
    
    include './layout/_header.php';

    include './layout/navSec.php';
?>
<div class="container mt-5" style="min-height: 80vh;padding-top: 50px;">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <h1>Add Profile</h1>
            <?php if(isset($retValProfileValidate)): ?>
                <div class="<?=$retValProfileValidate == "Data Saved Successfully!"?"alert-success":"alert-danger"?> shadow rounded d-flex justify-content-between" style="text-align: center;padding: 7px;font-size: 1.6rem;">
                    <span><?= $retValProfileValidate; ?></span>
                    <span class="me-2 cursor-pointer closeBtn">x</span>
                </div>
            <?php endif; ?>
            <div class="form-group col-md-12 shadow rounded p-5 bg-dark text-light mb-4">
                <span class="img-div" style="height: 5vh;">
                    <img src="./assets/img/avtar.png" class="w-100" style="cursor: pointer;border-radius: 50%;height: 45vh;" onClick="triggerClick()" id="profileDisplay">
                </span>
                <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="proflePicFldProfil" class="form-label">Profile Pic</label>
                            <input class="form-control" onChange="displayImage(this);" name="proflePicFldProfil" accept="image/*" type="file" id="proflePicFldProfil" required>
                        </div>
                        <div class="mb-3">
                            <label for="nameFldProfile" class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="nameFldProfile" placeholder="Name" id="nameFldProfile" aria-describedby="nameHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="genderFldProfile" class="form-label">Gender</label>
                            <select class="form-select" name="genderFldProfile" id="genderFldProfile" aria-label="Default select example" required>
                                <option selected value="women">Women</option>
                                <option value="men">Men</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="ageFldPPofile" class="form-label">Age</label>
                            <select class="form-select form-control" name="ageFldPPofile" id="ageFldPPofile" aria-label="Default select example" required>
                                <option selected>18</option>
                                <?=
                                    $staringAge = 19;
                                    $endAge = 40;
                                    for ($x = $staringAge; $x <= $endAge; $x++) {
                                        echo "<option value=".$x.">".$x."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="religionFldPPofile" class="form-label">Religion</label>
                            <select class="form-select" name="religionFldPPofile" id="religionFldPPofile" aria-label="Default select example" required>
                                <option selected value="hindu">Hindu</option>
                                <option value="muslim">Muslim</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="educationFldProfile" class="form-label">Education</label>
                            <input type="text" class="form-control" name="educationFldProfile" placeholder="Education" id="educationFldProfile" aria-describedby="educationHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="motherTongueFldPPofile" class="form-label">Mother Tongue</label>
                            <select class="form-select" name="motherTongueFldPPofile" id="motherTongueFldPPofile" aria-label="Default select example" required>
                                <option selected value="hindi">Hindi</option>
                                <option value="marathi">Marathi</option>
                                <option value="bengali">Bengali</option>
                                <option value="gujarati">Gujarati</option>
                                <option value="english">English</option>
                            </select>
                        </div>
                        <div>
                            <input class="btn btn-primary" type="submit" name="sumbitBtnProfle" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php 
    include './layout/_footer.php';
?>