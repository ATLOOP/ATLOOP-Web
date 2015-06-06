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

<div class="container">