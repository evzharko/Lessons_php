<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Requests;

class AdminPanelController extends Controller
{
    public function index ()
    {
        return view ('admin.index');
    }
}
