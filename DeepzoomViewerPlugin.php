<?php
/**
 * Main plugin script
 *
 * Main script for the plugin, sets up hooks and filters to the Omeka API.
 *
 * @package DeepZoomViewer
 * @author Gjergj Sheldija, <gjergj.sheldija@gmail.com>
 * @copyright Copyright 2012-2013 Gjergj Sheldija
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 */

class DeepzoomViewerPlugin extends Omeka_Plugin_Abstract
{

    protected $_hooks = array(
        'install',
        'uninstall',
        'config_form',
        'config',
        'define_routes',
    );

    const DEFAULT_VIEWER_WIDTH = 500;
    const DEFAULT_VIEWER_HEIGHT = 600;

    private $_supportedFiles = array('djvu');

    public function hookInstall()
    {
        set_option('deepzoomviewer_width_public', DeepzoomViewerPlugin::DEFAULT_VIEWER_WIDTH);
        set_option('deepzoomviewer_height_public', DeepzoomViewerPlugin::DEFAULT_VIEWER_HEIGHT);
    }

    public function hookUninstall()
    {
        delete_option('deepzoomviewer_width_public');
        delete_option('deepzoomviewer_height_public');
    }

    public function hookConfigForm()
    {
        include 'config_form.php';
    }

    public function hookConfig($post)
    {
        set_option('deepzoomviewer_width_public', $post['deepzoomviewer_width_public']);
        set_option('deepzoomviewer_height_public', $post['deepzoomviewer_height_public']);
    }

    public function hookDefineRoutes($router)
    {
        $router->addRoute(
            'deepzoomviewer_show_route',
            new Zend_Controller_Router_Route(
                'deepzoom-viewer/index/show/:filename',
                array(
                    'module'       => 'deepzoom-viewer',
                    'controller'   => 'index',
                    'action'       => 'show'
                    ),
                array( 'filename'  => '\s+')
            )
        );
    }
}
