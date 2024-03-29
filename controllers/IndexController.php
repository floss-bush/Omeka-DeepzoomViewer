<?php
/**
 * @package DeepZoomViewer
 * @author Gjergj Sheldija, <gjergj.sheldija@gmail.com>
 * @copyright Copyright 2012-2013 Gjergj Sheldija
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 */

/**
 * Controller for deep zoom viewer plugin
 */
class DeepZoomViewer_IndexController extends Omeka_Controller_Action {

    public function init()
    {
        $this->_modelClass = 'File';
    }

	public function showAction() {
		$this->view->filename = $this->getRequest()->getParam('filename');
	}

}
