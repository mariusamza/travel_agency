<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home() {
        return view('pages.home');
    }
    
    public function booking() {
        return view('pages.booking');
    }
    
    public function about() {
        return view('pages.about');
    }
    
    public function petru() {
        return view('pages.petru');
    }
}
