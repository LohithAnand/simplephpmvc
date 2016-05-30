<?php
/**
 * Author: Lohith
 */
require_once 'includes/EntryPoint.php';
require_once 'connectors/Database.php';

class App_Router extends App_EntryPoint {
    
    function process(App_Request $request) {
        $component = 'View';
        $view = 'Home';
        $action = '';
        if($request->has('view')) {
            $view = $request->get('view');
        } else if($request->has('action')) {
            $component = 'Action';
            $action = $request->get('action');
        }
        
        $componentName = !empty($action) ? $action : $view;
        
        if($component && $componentName) {
            $handlerClassName = App_Loader::getHandlerClassName($component,$componentName);
            $handler = new $handlerClassName();

            $handler->process($request);
        }
    }
    
}

