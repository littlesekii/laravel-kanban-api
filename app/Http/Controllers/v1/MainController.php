<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        return ['result' => 'Kanban API - Version 1.0'];
    }
}
