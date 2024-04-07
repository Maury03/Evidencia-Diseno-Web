<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userId = Auth::id();
        $userData = DB::table('Users')->where('id', $userId)->get();
        foreach ($userData as $user) {
            $userType = $user->type;
        }

        if ($userType == 'estudiante'){
            return redirect()->route('materia.index');
        } else {
            return redirect()->route('registro.index');
        }
    }
}
