<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {

        $services = Service::take(8)->get();
        $servants = User::take(3)->get();

        return view('home', ['services' => $services, 'servants' => $servants]);
    }

    public function services() {
        $services = Service::all();

        return view('services', ['services' => $services]);
    }

    public function profile($username) {
        $user = User::where('username', $username)->get();

        // dd($user);
        return view('profile', ['user' => $user->first()]);
    }

}
