<?php
    function geturl(){
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){
            return "https://".$_SERVER['HTTP_HOST'];
        }else{
            return "http://".$_SERVER['HTTP_HOST'];
        }
    }
    if(str_contains(geturl().$_SERVER['PHP_SELF'], 'gallery')){
        require_once '../php/DBConnect.php';
    }else{
        require_once './php/DBConnect.php';
    }
    $metaData = $db->metaData();
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <meta name="description" content="<?=$metaData[0]['description']?>" />

    <meta name="keywords" content="<?=$metaData[0]['keywords']?>" />

    <meta name="author" content="<?=$metaData[0]['author']?>" />

    <meta name="revised" content="<?=$metaData[0]['revised']?>" />

    <meta name="robot" content="index,follow" />

    <meta http-equiv="content-language" content="en-US" />

    <meta name="copyright" content="<?=$metaData[0]['copyright']?>" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="./favicon.png" type="image/png">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <?='<link rel="stylesheet" href="'.geturl().'/assets/css/style.css">';?>

    <title><?= $title." - ".$metaData[0]['title_common']?></title>

</head>

<body>
