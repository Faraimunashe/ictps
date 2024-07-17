<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::user()->hasRole('admin'))
        {
            return redirect()->route('dashboards');
        }elseif(Auth::user()->hasRole('mda'))
        {
            return redirect()->route('targets.index');
        }
    }

}
