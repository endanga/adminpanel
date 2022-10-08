<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('templates/topbar').view('templates/sidebar').view('dashboard/index').view('templates/footer');
    }
}
