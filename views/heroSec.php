<section class="section-hero" id="section-hero">
    <div class="container">
        <form action="./search.php" method="post">
            <div class="row" style="padding-top: 20vh;width: 70%;">
                <h1 class="text-capitalize">We bring people<br>together.</h1>
                <h1 class="text-capitalize">find your<br>perfect match</h1>
            </div>
            <div class="row" style="padding-top: 10vh;">
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
</section>