<?php

namespace Controllers;

use Views\MainView;

/**
 * @namespace Controllers
 * @Receive $view, $model, execute(): void
 * @From: Controller
*/
class HomeController extends Controller {

    public function __construct() { 
        $this -> view = new MainView('home');
    }

    /**
     * @return PageView
     * 
     * Send page to the client With custom infos
    */
    public function execute(): void {
        $this -> view -> render([
            'title' => 'Home'
        ]);
    }
}