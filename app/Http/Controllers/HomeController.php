<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('home');
    }

    public function services() {
        $services = Service::all();

        return view('services', ['services' => $services]);
    }
}
