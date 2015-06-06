<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>">
<head>

    <!-- Site meta -->
    <meta charset="utf-8">
    <title><?php echo $data['title'].' | '.SITETITLE; //SITETITLE defined in app/core/config.php ?></title>
    <link rel="stylesheet" type="text/css" href="/bower_components/foundation/css/foundation.css">
    <script src="/bower_components/modernizr/modernizr.js"></script>

    <!-- CSS -->
    <?php
    helpers\assets::css(array(
        //'//cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/foundation.min.css',
        '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
        helpers\url::template_path() . 'css/main.css',
    ))
    ?>

    <!-- JS -->
    <?php
    helpers\assets::js(array(
        helpers\url::template_path() . 'js/jquery.js',
    ))
    ?>
</head>
<body>
    <div class="show-for-small-only">
        <a href="#">
            <img id="header-logo-small"
                 src="<?php echo helpers\url::template_path() . 'img/OOP%20Logo.png'?>"/>
        </a>
    </div>
    <div class="hide-for-small-only row">
        <div class="small-12 small-centered columns">
            <a href="#">
                <img id="header-logo-large"
                     src="<?php echo helpers\url::template_path() . 'img/OOP-Logo-wide-web.png'?>"/>
            </a>
        </div>
    </div>
<div class="container">