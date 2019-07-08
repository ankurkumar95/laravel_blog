<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome to Shutter Show Blog!";
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        $data = array(
            'title' => 'Service',
            'services' => ['Web Designing', 'Templating', 'SEO', 'CSS']
        );
        return view('pages.services')->with($data);
    }
}
