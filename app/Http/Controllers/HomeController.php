<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Formulir;


class HomeController extends Controller
{
    // public function index() {
    //     $role=Auth::user()->role;

    //     if($role=='1') {
    //         $formulirs = Formulir::all();
    //         return view('admin.dashboard');
    //     } else {
    //         return view('dashboard');
    //     }
    // }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $formulirs = Formulir::all();
        $role = Auth::user()->role;

        if($role=='1') {
            $formulirs = Formulir::all();
            return view('admin.dashboard', compact('formulirs'));
        } else {
        $formulirs = Formulir::all();

            return view('user.dashboard', compact('formulirs'));
        }
    }

}
