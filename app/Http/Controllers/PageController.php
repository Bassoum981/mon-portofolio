<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function projets() {
        return view('projets');
    }

    public function about() {
    return view('about');
}
public function parcours() {
    return view('parcours');
}

public function contact() {
    return view('contact');
}
}