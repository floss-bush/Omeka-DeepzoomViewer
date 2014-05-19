<?php

define('DEEPZOOMVIEWER_PLUGIN_DIR', PLUGIN_DIR . '/DeepzoomViewer');
require_once(DEEPZOOMVIEWER_PLUGIN_DIR . '/DeepzoomViewerPlugin.php');

$DeepZoomViewerPlugin = new DeepzoomViewerPlugin();
$DeepZoomViewerPlugin->setUp();
