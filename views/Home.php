<?php
/**
 * Author: Lohith
 */
class Home_View extends View_Controller {
    
    public function process(App_Request $request) {
        $viewer = $this->getViewer();
        $viewer->view('Home');
    }
    
}

