<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {

    public function index() {

        $title = 'Bine ai venit pe LARAVEL';
        return view('pages.index')->with('title', $title);
    }

    public function about() {

        $title = 'Bine ai venit pe ABOUT';
        return view('pages.about')->with('title', $title);
    }

    public function services() {

        return view('pages.services');
    }

}
