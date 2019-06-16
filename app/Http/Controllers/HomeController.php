<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();

        $rol = $user->roles->implode('name', ', ');

        switch ($rol)
        {
          case 'Super-Admin':
          $saludo = 'Bienvenido Super-Admin';

          return view('welcome2', compact('saludo'));
          break;

          case 'Moderador':
          $saludo = 'Bienvenido Moderador';

          return view('welcome2', compact('saludo'));
          break;

          case 'Editor':
          $saludo = 'Bienvenido Editor';

          return view('welcome2', compact('saludo'));
          break;
      }
  }
}
