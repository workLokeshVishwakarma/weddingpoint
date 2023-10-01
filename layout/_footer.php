<?php
    if(str_contains(geturl().$_SERVER['PHP_SELF'], 'gallery')){
        require_once '../php/DBConnect.php';
    }else{
        require_once './php/DBConnect.php';
    }
    $footerSec = $db->footerSec();
?>
        <footer class="foter" style="padding: 0.6rem;box-shadow: 0px 0px 12px 2px #000;">
            <span><b>Made By: <a href="<?=$footerSec[0]['redirect_link_footer']?>"><?=$footerSec[0]['madeby']?></a></b></span>
            <br>
            <span>&COPY;<?=$footerSec[0]['copyright']?></span>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <?='<script src="'.geturl().'/assets/js/script.js"></script>';?>
    </body>
</html>
