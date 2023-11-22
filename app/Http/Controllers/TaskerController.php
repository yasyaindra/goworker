<?php

namespace App\Http\Controllers;

use services;
use App\Models\Area;
use App\Models\User;
use App\Models\Service;
use Illuminate\Http\Request;

class TaskerController extends Controller
{
    //
    public function become_tasker() {

        $areas = Area::all();
        $services = Service::all();

        return view('become-tasker', ['areas' => $areas, 'services' => $services]);
    }

    public function update(Request $request, User $id) {

        $data = [
            'province' => $request->province,
            'service_id' => $request->service_id,
            'role' => 'tasker'
        ];


        User::where('id', $id->id)->update($data);

        return redirect('/dashboard')->with('success','New Post Edit!');
    }
}
