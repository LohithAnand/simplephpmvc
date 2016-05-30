<?php
/**
 * Author: Lohith
 */
require_once 'includes/Viewer.php';

abstract class View_Controller extends Action_Controller {
    
    function __construct() {
		parent::__construct();
	}
    
    function getViewer() {
        return new App_Viewer();
    }
    
}

