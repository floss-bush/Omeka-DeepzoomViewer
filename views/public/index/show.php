<!DOCTYPE html>
<html lang="en" style="height: 100%;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- put this here for the player -->
</head>
<body style="height: 100%;">
<div class="wellcomePlayer" data-uri="<?php echo 'digitized/' . $this->filename .'/' . $this->filename . '.js'; ?>" data-baseuri="<?php echo WEB_ROOT . '/'; ?>" data-assetsequenceindex="0" data-assetindex="0" style="width:<?php echo get_option('deepzoomviewer_width_public') ?>; min-height: -moz-calc(<?php echo get_option('deepzoomviewer_height_public') ?> - 10px); background-color: #000"></div>
<script type="text/javascript" id="embedWellcomePlayer" src="<?php echo WEB_PLUGIN . DIRECTORY_SEPARATOR . 'DeepzoomViewer' . DIRECTORY_SEPARATOR; ?>js/js/embed.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
</body>
</html>