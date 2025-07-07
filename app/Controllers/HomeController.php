<?php
namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller {
    public function index() {
        $data = [
            // 'title' => 'Portfolio',
        ];
        
        $this->view('home', $data);
    }
}
