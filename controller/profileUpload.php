<?php
    require_once './php/DBConnect.php';
    function imageUpload($fileGet, $dataGet, $db){
        $msg = NULL;
        $profileImageName = time().'-'.$fileGet["proflePicFldProfil"]["name"];
        $target_file = './assets/img/profiles/'.basename($profileImageName);

        if(!str_contains($db->hostname().$_SERVER['PHP_SELF'], 'localhost')){
            if($fileGet['proflePicFldProfil']['size'] > 1024000) {
                return "Image size should not be greated than 200Kb";
            }
        }

        if(file_exists($target_file)) {
            return "File already exists";
        }

        if(move_uploaded_file($fileGet["proflePicFldProfil"]["tmp_name"], $target_file)) {

            $submitRetValProfile = $db->profileUpload($profileImageName, $dataGet);

            if($submitRetValProfile){
                return "Data Saved Successfully!";
            } else {
                return "There was an error in the database";
            }

        } else {
            return "There was an error uploading the file";
        }
    }
?>